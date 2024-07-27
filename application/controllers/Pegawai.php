<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('pegawai_model');
        }
	public function index()
	{
                $data['title'] = ' Pegawai Dai Peduli' ;
                $data['pegawai'] = $this -> pegawai_model-> get_data('tbl_pegawai')->result();
                
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('pegawai', $data);
                $this->load->view('templates/footer');
	}
        public function tambah()
        {
                $data['title'] = 'Tambah Pegawai' ;

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('tambah_pegawai');
                $this->load->view('templates/footer');

        }
        public function tambah_aksi()
        {
                $this->_rules();

                if ($this->form_validation->run() == False){
                        $this->tambah();
        } else{
                $data = array(
                        'nip' => $this ->input->post('nip'),
                        'nama_lengkap' => $this ->input->post('nama_lengkap'),
                        'jabatan' => $this ->input->post('jabatan'),
                        'instansi' => $this ->input->post('instansi'),
                        'alamat' => $this ->input->post('alamat'),
                        'email' => $this ->input->post('email'),
                        'password' => $this ->input->post('password'),
                );

                $this->pegawai_model->insert_data($data, 'tbl_pegawai');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil di tambahkan !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('pegawai');

              }
        }

        public function edit($id_pegawai)
        {
           $this->_rules();

           if ($this->form_validation->run() == FALSE){
                $this->index();
           } else{
                $data = array(
                        'id_pegawai' => $id_pegawai,
                        'nip' => $this ->input->post('nip'),
                        'nama_lengkap' => $this ->input->post('nama_lengkap'),
                        'jabatan' => $this ->input->post('jabatan'),
                        'instansi' => $this ->input->post('instansi'),
                        'alamat' => $this ->input->post('alamat'),
                        'email' => $this ->input->post('email'),
                        'password' => $this ->input->post('password'),
                );
                $this -> pegawai_model->update_data($data,'tbl_pegawai');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil di Ubah !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('pegawai');
           }
        }
        public function delete($id_pegawai)
        {
                $where = array('id_pegawai' => $id_pegawai);

                $this -> pegawai_model->delete($where,'tbl_pegawai');
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Berhasil di Hapus !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('pegawai');
        } 
        public function _rules()
        {
        $this->form_validation->set_rules('nip', 'NIP', 'required', array(
                'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', array(
                'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', array(
                'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('instansi', 'Instansi', 'required', array(
                'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
                'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('email', 'Email', 'required', array(
                'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
                'required' => '%s Harus diisi !!'
        ));
        }

       
}
        



