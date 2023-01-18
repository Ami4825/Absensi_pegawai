<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_models extends CI_Model
{
    public function absensi_keluar(){
        $data = [
			'jam_keluar' => date('Y-m-d H:i:s')
        ];

        $this->db->where('nik_karyawan', $this->input->post('nik'));
        $this->db->update('absensi', $data);
    }

    public function laporan_absensi(){
        $this->db->select('jabatan.*, pegawai.nik, pegawai.nama_pegawai, pegawai.nama_pegawai, pegawai.jenis_kelamin, absensi.jam_masuk, absensi.jam_keluar');
        $this->db->from('pegawai');
        $this->db->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan');
        $this->db->join('absensi', 'absensi.nik_karyawan = pegawai.nik');
        $query = $this->db->get();
        return $query->result_array();
    }
}