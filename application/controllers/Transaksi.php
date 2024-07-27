<?php 
defined ('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('transaksi_model');
    }
    public function index()
{
            $data['title'] = 'Daftar Hadir Pegawai Dai Peduli' ;
            $data['transaksi'] = $this->transaksi_model->get_data('tbl_lapabsensi')->result();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('transaksi', $data);
            $this->load->view('templates/footer');
}
public function delete($id_absen)
{
        $where = array('id_absen' => $id_absen);

        $this -> transaksi_model->delete($where,'tbl_lapabsensi');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('transaksi');
} 

}

   

?>