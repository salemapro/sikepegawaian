<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function __construct()
    {
                parent::__construct();
                $this->load->model('absensi_model');
    }
    public function index()
	{
                $data['title'] = 'Check-Out Pegawai Dai Peduli' ;
                $drop['nippegawai'] = $this->absensi_model->get_data();
                
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar', $data);
                $this->load->view('checkout', $drop);
                $this->load->view('templates/footer');
	}

    
    public function _rules()
    {
    $this->form_validation->set_rules('checkout', 'checkout', 'required', array(
            'required' => '%s Harus diisi !!'
    ));
    
    }
}
?>