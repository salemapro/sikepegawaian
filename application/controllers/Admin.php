<?php 
defined ('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
                $this->load->model('admin_model');
        }
    	public function index()
	{
                $data['title'] = 'Dai Peduli' ;
                $data['admin'] = $this -> admin_model-> get_data('admin')->result();
                
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('admin', $data);
                $this->load->view('templates/footer');
	}
     public function tambah()
        {
                $data['title'] = 'Tambah Admin' ;

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('tambah_admin');
                $this->load->view('templates/footer');

        }
    
        public function tambah_aksi()
        {
                $this->_rules();

                if ($this->form_validation->run() == False){
                        $this->tambah();
        } else{
                $data = array(
                        'username' => $this ->input->post('username'),
                        'password' => $this ->input->post('password'),
                        
                );

                $this->admin_model->insert_data($data, 'admin');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil di tambahkan !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin');

              }
        }

        public function edit($id)
        {
            $this->_rules();

            if ($this->form_validation->run() == False){
                    $this->index();
        } else{
            $data = array(
                    'id' => $id,
                    'username' => $this ->input->post('username'),
                    'password' => $this ->input->post('password'),
                    
            );

            $this->admin_model->update_data($data, 'admin');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Ubah !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin');

          }
        }

        public function delete($id)
        {
                $where = array('id' => $id);

                $this -> admin_model->delete($where,'admin');
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Berhasil di Hapus !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin');
        } 

        public function _rules()
        {
        $this->form_validation->set_rules('username', 'Username', 'required', array(
                'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
                'required' => '%s Harus diisi !!'
        ));
        
        }
}
        
?>