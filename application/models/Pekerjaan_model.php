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


        $this->db->join('tbl_pegawai', 'tbl_pegawai.nip = tbl_pekerjaan.nip', 'left');
        $this->db->where('tbl_pekerjaan.nip', $nip);
        $this->db->order_by('created_at', 'DESC');
        // $this->db->where('DATE(created_at)', $date);
        return $this->db->get('tbl_pekerjaan')->result();
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
