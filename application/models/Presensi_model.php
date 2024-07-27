<?php
class Presensi_model extends CI_Model
{
    public function getDataByDate($tanggal)
    {
        $this->db->select('tbl_pegawai.nip, tbl_pegawai.nama_lengkap, tbl_lapabsensi.checkin, tbl_lapabsensi.checkout, tbl_lapabsensi.izin, tbl_izin.jenis_izin, tbl_lapabsensi.keterangan, tbl_lapabsensi.pekerjaan_selesai');
        $this->db->from('tbl_pegawai');
        $this->db->join('tbl_lapabsensi', 'tbl_pegawai.nip = tbl_lapabsensi.nip');
        $this->db->join('tbl_izin', 'tbl_lapabsensi.izin = tbl_izin.id');
        $this->db->where('DATE(tbl_lapabsensi.tanggal)', $tanggal);
        return $this->db->get()->result();
    }
}
