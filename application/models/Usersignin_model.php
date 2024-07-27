<?php

defined('BASEPATH') OR exit('no direct script access allowed');

class Usersignin_model extends CI_Model{
    function cek_signin($where){
        return $this->db->get_where('tbl_pegawai',$where);
    }
}
?>