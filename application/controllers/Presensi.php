<?php
class Presensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('presensi_model');
    }
    public function index()
    {
        $data['title'] = 'Daftar Pegawai Dai Peduli';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('presensihari', $data);
        $this->load->view('templates/footer');
    }

    public function viewByDate()
    {
        // Ambil tanggal dari form yang disubmit
        $tanggal = $this->input->post('tanggal');

        $data['lapabsensi'] = $this->presensi_model->getDataByDate($tanggal);
        // $data['izin'] = $this->presensi_model->getDataIzin();

        $data['title'] = 'Daftar Pegawai Dai Peduli';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('presensihari', $data);
        $this->load->view('templates/footer');
    }
}
