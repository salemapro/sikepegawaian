<?php

      class Dashboard extends CI_Controller{
          public function index()
      {
          $data['title'] = "Dai Peduli";
          $pegawai = $this->db->query("SELECT * FROM tbl_pegawai");
          $admin = $this->db->query("SELECT * FROM admin ");
          $data['pegawai']=$pegawai->num_rows();
          $data['admin']=$admin->num_rows();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('dashboard', $data);
                $this->load->view('templates/footer');

          }
      }
?>