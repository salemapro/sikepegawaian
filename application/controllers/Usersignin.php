<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usersignin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usersignin_model');
    }

    public function index()
    {
        $data['title'] = 'Absensi Pegawai Dai Peduli';

        $this->load->view('templates/header', $data);
        $this->load->view('usersignin', $data);
    }

    public function signin_aksi()
    {
        $user = $this->input->post('nip', true);
        $pass = $this->input->post('password', true);


        //ruls validasi
        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                'nip' => $user,
                'password' => $pass
            );
            $ceklogin = $this->usersignin_model->cek_signin($where)->num_rows();

            if ($ceklogin > 0) {
                $sess_data = array(
                    'nip' => $user,
                    'password' => $pass,
                    'signin' => 'OK'
                );

                $this->session->set_userdata($sess_data);
                redirect(base_url('absensi'));
            } else {
                redirect(base_url('usersignin'));
            }
        } else {
            $this->load->view('templates/header');
            $this->load->view('usersignin');
        }
        $this->session->set_userdata('nip', $user);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('usersignin'));
    }
}
