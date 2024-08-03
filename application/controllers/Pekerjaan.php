<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pekerjaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pekerjaan_model');
    }

    public function index()
    {
        $data['title'] = 'Dai Peduli';
        $data['pekerjaan'] = $this->Pekerjaan_model->get_data('tbl_pekerjaan')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pekerjaan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pekerjaan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_pekerjaan');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == False) {
            $this->tambah();
        } else {
            $data = array(
                'detail_pekerjaan' => $this->input->post('detail_pekerjaan'),
                'nip' => $this->input->post('nip'),
            );

            $this->Pekerjaan_model->insert_data($data, 'tbl_pekerjaan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil di tambahkan !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('pekerjaan');
        }
    }

    public function edit($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id' => $id,
                'detail_pekerjaan' => $this->input->post('detail_pekerjaan'),
                'nip' => $this->input->post('nip')
            );
            $this->Pekerjaan_model->update_data($data, 'tbl_pekerjaan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil di Ubah !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('pekerjaan');
        }
    }

    public function delete($id)
    {
        $where = array('id' => $id);

        $this->Pekerjaan_model->delete($where, 'tbl_pekerjaan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Berhasil di Hapus !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('pekerjaan');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('detail_pekerjaan', 'Detail Pekerjaan', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
    }

    function pekerjaan_user()
    {
        $current_date = date('Y-m-d');
        $data['title'] = 'Pekerjaan Pegawai CV.Insaba Pratista Agya';
        $data['pekerjaan'] = $this->Pekerjaan_model->get_data_by_nip($current_date);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pekerjaan_user', $data);
        $this->load->view('templates/footer');
    }
}
