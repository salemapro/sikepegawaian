<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Izin_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_all_data($table)
    {
        return $this->db->get($table)->result();
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
