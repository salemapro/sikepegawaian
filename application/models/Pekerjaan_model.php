<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Pekerjaan_model extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    function get_data_by_nip($date)
    {
        $nip = $this->session->userdata('nip');

        $this->db->where('nip', $nip);
        $this->db->where('DATE(created_at)', $date);
        return $this->db->get('tbl_pekerjaan')->row();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id', $data['id']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
