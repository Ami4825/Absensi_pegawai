<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_models extends CI_Model
{
    public function pegawai_get(){
        $this->db->select('*');
        $this->db->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan');
        $this->db->from('pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function ambil_id($id){
        return $this->db->get_where('pegawai', ['nik' => $id])->row_array();
    }

    public function ubah_data(){
        $data = [
            "nik" => $this->input->post('nik', true),
            "nama_pegawai" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenisk', true),
            "id_jabatan" => $this->input->post('jabatan', true),
            "no_telepon" => $this->input->post('telepon', true),
            "alamat" => $this->input->post('alamat', true),
        ];

        $this->db->where('nik', $this->input->post('nik'));
        $this->db->update('pegawai', $data);
    }

    public function hapus_pegawai($id){
        $this->db->where('nik', $id);
        $this->db->delete('pegawai');
    }
}