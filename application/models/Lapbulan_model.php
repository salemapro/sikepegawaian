<?php
class Lapbulan_model extends CI_Model
{
    public function getJumlahKehadiranByMonth($bulan)
    {
        $this->db->select('tbl_pegawai.nip, tbl_pegawai.nama_lengkap, COUNT(*) as jumlah_kehadiran');
        $this->db->from('tbl_pegawai');
        $this->db->join('tbl_lapabsensi', 'tbl_pegawai.nip = tbl_lapabsensi.nip');
        $this->db->where('MONTH(tbl_lapabsensi.tanggal)', $bulan);
        $this->db->where('tbl_lapabsensi.izin', 1);
        $this->db->group_by('tbl_pegawai.nip, tbl_pegawai.nama_lengkap');
        return $this->db->get()->result();
    }
}
