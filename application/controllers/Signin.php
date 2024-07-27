<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('signin_model');
    }

    public function index()
    {
        $data['title'] = 'Absensi Pegawai Dai Peduli';

        $this->load->view('templates/header', $data);
        $this->load->view('signin', $data);
    }

    public function signin_aksi()
    {
        $user = $this->input->post('username', true);
        $pass = $this->input->post('password', true);

        //ruls validasi
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                'username' => $user,
                'password' => $pass
            );
            $ceklogin = $this->signin_model->cek_signin($where)->num_rows();

            if ($ceklogin > 0) {
                $sess_data = array(
                    'username' => $user,
                    'password' => $pass,
                    'signin' => 'OK'
                );

                $this->session->set_userdata($sess_data);
                redirect(base_url('dashboard'));
            } else {
                redirect(base_url('signin'));
            }
        } else {
            $this->load->view('templates/header');
            $this->load->view('signin');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('signin'));
    }
}
