<?php
class Lapbulan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lapbulan_model');
    }

    public function index()
    {
        $data['title'] = 'Daftar Pegawai Dai Peduli';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('lapbulan', $data);
        $this->load->view('templates/footer');
    }

    public function viewByMonth()
    {
        $bulan = $this->input->post('bulan');

        $this->load->model('Lapbulan_model');
        $data['lapbulan'] = $this->Lapbulan_model->getJumlahKehadiranByMonth($bulan);

        $data['title'] = 'Daftar Pegawai Dai Peduli';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('lapbulan', $data);
        $this->load->view('templates/footer');
    }

    public function cetaklapbulan()
    {

        $this->db->select('nip, COUNT(*) as jumlah_kehadiran');
        $this->db->where('MONTH(tanggal)');
        $this->db->group_by('nip');
        return $this->db->get('tbl_lapabsensi')->result();
    }
}
