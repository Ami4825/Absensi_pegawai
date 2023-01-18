<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_models extends CI_Model
{

    public function jabatan_get()
    {
        return $this->db->get('jabatan')->result_array();
    }

    public function ambil_id($id){
        return $this->db->get_where('jabatan', ['id_jabatan' => $id])->row_array();
    }

    public function ubah_data(){
        $data = [
            "nama_jabatan" => $this->input->post('namajabatan', true),
            "jam_kerja" => $this->input->post('jamkerja', true)
        ];

        $this->db->where('id_jabatan', $this->input->post('id_jabatan'));
        $this->db->update('jabatan', $data);
    }

    public function hapus_jabatan($id){
        $this->db->where('id_jabatan', $id);
        $this->db->delete('jabatan');
    }

}