<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Izin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Izin_model');
    }
    public function index()
    {
        $data['title'] = 'Dai Peduli';
        $data['izin'] = $this->Izin_model->get_data('tbl_izin')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('izin', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Tambah izin';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_izin');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == False) {
            $this->tambah();
        } else {
            $data = array(
                'jenis_izin' => $this->input->post('jenis_izin'),
                // 'password' => $this->input->post('password'),

            );

            $this->Izin_model->insert_data($data, 'tbl_izin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil di tambahkan !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('izin');
        }
    }

    public function edit($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == False) {
            $this->index();
        } else {
            $data = array(
                'id' => $id,
                'jenis_izin' => $this->input->post('jenis_izin'),
                // 'password' => $this->input->post('password'),

            );

            $this->Izin_model->update_data($data, 'tbl_izin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Ubah !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('izin');
        }
    }

    public function delete($id)
    {
        $where = array('id' => $id);

        $this->Izin_model->delete($where, 'tbl_izin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Berhasil di Hapus !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('izin');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('jenis_izin', 'Jenis Izin', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        // $this->form_validation->set_rules('password', 'Password', 'required', array(
        //     'required' => '%s Harus diisi !!'
        // ));
    }
}
