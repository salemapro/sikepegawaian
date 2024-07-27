<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Transaksi_model extends CI_Model{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
?>