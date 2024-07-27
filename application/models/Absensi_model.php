<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Absensi_model extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->query("SELECT *FROM tbl_pegawai ORDER BY nip ASC");
        return $query->result();
    }

    public function insert_data($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    // public function update_checkout($nip, $checkout)
    // {
    //     // Query untuk melakukan update data
    //     $data = array('checkout' => $checkout);
    //     $this->db->where('nip', $nip);
    //     $this->db->update('tbl_lapabsensi', $data);
    // }

    function check_if_already_checked_in($nip, $date)
    {
        $this->db->where('nip', $nip);
        $this->db->where('DATE(checkin)', $date);
        $query = $this->db->get('tbl_lapabsensi');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function check_if_already_checked_out($nip, $date)
    {
        $this->db->where('nip', $nip);
        $this->db->where('DATE(tanggal)', $date);
        $this->db->where('checkout !=', '00:00:00');
        $query = $this->db->get('tbl_lapabsensi');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function check_izin($nip, $date)
    {
        $this->db->where('nip', $nip);
        $this->db->where('izin', 1);
        $this->db->where('DATE(tanggal)', $date);
        $query = $this->db->get('tbl_lapabsensi');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_checkout($nip, $checkout, $pekerjaan)
    {
        // Query untuk melakukan update data
        $data = [
            'checkout' => $checkout,
            'pekerjaan_selesai' => $pekerjaan
        ];
        $this->db->where('nip', $nip);
        $this->db->where('DATE(tanggal)', date('Y-m-d'));
        $this->db->where('checkout', '00:00:00'); //
        // $this->db->where('DATE(checkout) IS NULL', null, false); // Tambahkan kondisi untuk hanya memperbarui jika belum checkout
        $this->db->update('tbl_lapabsensi', $data);
    }
}
