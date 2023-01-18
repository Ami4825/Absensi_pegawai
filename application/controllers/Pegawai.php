<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$this->load->view('pegawai');
	}

	public function absen_masuk()
	{
		
		$this->form_validation->set_rules('nik', 'nik', 'required');

		if ($this->form_validation->run() == false){
		$this->load->view('Pegawai');
		}
		else{
			$id_karyawan = $this->input->post('nik');
			$query = "SELECT nik_karyawan FROM absensi WHERE nik_karyawan = $id_karyawan AND tgl_absensi = CURRENT_DATE";
			// var_dump($query);die;
            $cekabsen = $this->db->query($query);
			$query2 = "SELECT nik FROM pegawai WHERE nik = $id_karyawan";
            $cekid = $this->db->query($query2);
			$data_absen_masuk = [
                'nik_karyawan'  => $this->input->post('nik'),
				'tgl_absensi' => date('Y-m-d'),
				'jam_masuk' => date('Y-m-d H:i:s')
            ];

			if(!$cekabsen->num_rows()==0){
				$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Anda</strong> Sudah Absen.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button> </div>');
				redirect('pegawai');
			}
			else if($cekid->num_rows()==0){
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>NIK </strong> Tidak terdaftar.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
			redirect('pegawai');
			}
			else{
			$this->db->insert('absensi', $data_absen_masuk);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Abesensi</strong> Berhasil.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
			redirect('pegawai');
			// $this->Absensi_models->tambah_absen($data_pegawai);
			}
		}
	}

	public function absen_keluar()
	{
		$this->form_validation->set_rules('nik', 'nik', 'required');

		if ($this->form_validation->run() == false){
		$this->load->view('Pegawai');
		}
		else{
			$id_karyawan = $this->input->post('nik');
			$query2 = "SELECT nik FROM pegawai WHERE nik = $id_karyawan";
            $cekid = $this->db->query($query2);

			if($cekid->num_rows()==0){
				$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>NIK </strong> Tidak terdaftar.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button> </div>');
				redirect('pegawai');
			}
			else{
				$this->Absensi_models->absensi_keluar();
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Absensi Keluar</strong> Berhasil di input.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button> </div>');
				redirect('pegawai');
			}
		}
	}
}
