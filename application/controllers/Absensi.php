<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
        public function __construct()
        {
                parent::__construct();
                $this->load->model('Absensi_model');
                $this->load->model('Izin_model');
                $this->load->model('Pekerjaan_model');
        }

        public function index()
        {
                $current_date = date('Y-m-d');

                $data['title'] = 'Check-In Pegawai CV.Insaba Pratista Agya';
                $data['izin'] = $this->Izin_model->get_all_data('tbl_izin');
                $data['pekerjaan'] = $this->Pekerjaan_model->get_data_by_nip($current_date);

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar', $data);
                $this->load->view('absensi', $data);
                $this->load->view('templates/footer');
        }

        public function tambah_aksi()
        {
                $nip = $this->input->post('nip');
                $izin = $this->input->post('izin');

                // Cek apakah pegawai sudah check-in hari ini
                $current_date = date('Y-m-d');
                $already_checked_in = $this->Absensi_model->check_if_already_checked_in($nip, $current_date);

                if ($already_checked_in) {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Pegawai sudah melakukan check-in hari ini.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>');
                        redirect('absensi');
                } else {
                        if ($izin != 1) {
                                log_message('debug', 'NIP: ' . $this->input->post('nip'));
                                log_message('debug', 'Checkin: ' . $this->input->post('checkin'));
                                log_message('debug', 'Keterangan: ' . $this->input->post('keterangan'));

                                $data = array(
                                        'nip' => $this->input->post('nip'),
                                        'checkin' => "-",
                                        'checkout' => "-",
                                        'izin' => $this->input->post('izin'),
                                        'keterangan' => "Tidak Bekerja",
                                        'pekerjaan_selesai' => "-"
                                );

                                $insert_id = $this->Absensi_model->insert_data($data, 'tbl_lapabsensi');
                                if ($insert_id) {
                                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Checkin Pegawai Terdaftar!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>');
                                } else {
                                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Gagal mendaftarkan checkin pegawai.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>');
                                }
                                redirect('absensi');
                        } else {
                                $this->_rules();

                                if ($this->form_validation->run() == False) {
                                        // Add debug statement to check validation errors
                                        $errors = validation_errors();
                                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $errors . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                                        $this->index();
                                } else {
                                        // Debug to check posted values
                                        log_message('debug', 'NIP: ' . $this->input->post('nip'));
                                        log_message('debug', 'Checkin: ' . $this->input->post('checkin'));
                                        log_message('debug', 'Keterangan: ' . $this->input->post('keterangan'));

                                        $data = array(
                                                'nip' => $this->input->post('nip'),
                                                'checkin' => $this->input->post('checkin'),
                                                'izin' => $this->input->post('izin'),
                                                'keterangan' => $this->input->post('keterangan')
                                        );

                                        $insert_id = $this->Absensi_model->insert_data($data, 'tbl_lapabsensi');
                                        if ($insert_id) {
                                                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Checkin Pegawai Terdaftar!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
                                        } else {
                                                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                Gagal mendaftarkan checkin pegawai.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
                                        }
                                        redirect('absensi');
                                }
                        }
                }
        }

        public function _rules()
        {
                $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array(
                        'required' => '%s Harus diisi !!'
                ));

                // $this->form_validation->set_rules('checkin', 'checkin', 'required', array(
                //         'required' => '%s Harus diisi !!'
                // ));

        }

        // public function update_checkout()
        // {
        //         // Validasi form jika diperlukan
        //         $this->form_validation->set_rules('nip', 'NIP', 'required');
        //         $this->form_validation->set_rules('checkout', 'Checkout', 'required');
        //         // $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');

        //         if ($this->form_validation->run() == FALSE) {
        //                 // Jika validasi gagal, tampilkan kembali form edit
        //                 $data['title'] = 'Checkout Pegawai CV. Insaba Pratista Agya';
        //                 $drop['nippegawai'] = $this->Absensi_model->get_data();

        //                 $this->load->view('templates/header', $data);
        //                 $this->load->view('templates/navbar', $data);
        //                 $this->load->view('checkout', $drop);
        //                 $this->load->view('templates/footer');
        //         } else {
        //                 // Ambil data dari form
        //                 $nip = $this->input->post('nip');
        //                 $checkout = $this->input->post('checkout');
        //                 $pekerjaan = $this->input->post('pekerjaan');

        //                 // Cek apakah pegawai sudah checkout hari ini
        //                 $current_date = date('Y-m-d');
        //                 $already_checked_out = $this->Absensi_model->check_if_already_checked_out($nip, $current_date);

        //                 if ($already_checked_out) {
        //                         $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //                                 Pegawai sudah melakukan checkout hari ini.
        //                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                                 <span aria-hidden="true">&times;</span>
        //                                 </button>
        //                                 </div>');
        //                         redirect('checkout');
        //                 } else {
        //                         // Panggil model untuk melakukan update data
        //                         $check_izin = $this->Absensi_model->check_izin($nip, $current_date);
        //                         if ($check_izin) {
        //                                 $this->Absensi_model->update_checkout($nip, $checkout);

        //                                 // Redirect ke halaman yang sesuai
        //                                 $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //                                         Checkout Pegawai Terdaftar!
        //                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                                         <span aria-hidden="true">&times;</span>
        //                                         </button>
        //                                         </div>');
        //                                 redirect('checkout');
        //                         } else {
        //                                 $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //                                         Pegawai Sudah Mengajukan Izin.
        //                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                                         <span aria-hidden="true">&times;</span>
        //                                         </button>
        //                                         </div>');
        //                                 redirect('checkout');
        //                         }
        //                 }
        //         }
        // }

        public function update_checkout()
        {
                // Ambil data dari form
                $nip = $this->input->post('nip');
                $checkout = $this->input->post('checkout');
                $pekerjaan = $this->input->post('pekerjaan');

                // Cek apakah pegawai sudah checkout hari ini
                $current_date = date('Y-m-d');
                $already_checked_out = $this->Absensi_model->check_if_already_checked_out($nip, $current_date);

                if ($already_checked_out) {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Pegawai sudah melakukan checkout hari ini.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>');
                        redirect('checkout');
                } else {
                        // Panggil model untuk melakukan update data
                        $check_izin = $this->Absensi_model->check_izin($nip, $current_date);
                        if ($check_izin) {
                                // Tambahkan aturan validasi untuk textarea 'pekerjaan'
                                $this->form_validation->set_rules('nip', 'NIP', 'required');
                                $this->form_validation->set_rules('checkout', 'Checkout', 'required');
                                $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', array('required' => '%s Harus diisi !!'));

                                if ($this->form_validation->run() == FALSE) {
                                        // Jika validasi gagal, tampilkan kembali form edit
                                        $errors = validation_errors();
                                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $errors . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                                        $data['title'] = 'Checkout Pegawai CV. Insaba Pratista Agya';
                                        $drop['nippegawai'] = $this->Absensi_model->get_data();

                                        $this->load->view('templates/header', $data);
                                        $this->load->view('templates/navbar', $data);
                                        $this->load->view('checkout', $drop);
                                        $this->load->view('templates/footer');
                                } else {
                                        $this->Absensi_model->update_checkout($nip, $checkout, $pekerjaan);

                                        // Redirect ke halaman yang sesuai
                                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Checkout Pegawai Terdaftar!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
                                        redirect('checkout');
                                }
                        } else {
                                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Pegawai Sudah Mengajukan Izin.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>');
                                redirect('checkout');
                        }
                }
        }
}
