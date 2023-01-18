<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin');
	}

    public function jabatan()
	{
        $data['jabatan'] = $this->Jabatan_models->jabatan_get();
        // set rules
        $this->form_validation->set_rules('namajabatan', 'Namajabatan', 'required|trim');
        $this->form_validation->set_rules('jamkerja', 'Jamkerja', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('tbl_jabatan.php' , $data);
        }

        else{
            $data_jabatan = [
                'nama_jabatan' => htmlspecialchars($this->input->post('namajabatan', true)),
                'jam_kerja' => htmlspecialchars($this->input->post('jamkerja', true)),
            ];
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Jabatan</strong> berhasil ditambahkan.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button> </div>');
            $this->db->insert('jabatan', $data_jabatan);
            redirect('Admin/jabatan');
        }

    }

    public function edit_jabatan($id)
    {
        $data['jabatan'] = $this->Jabatan_models->ambil_id($id);

        $this->form_validation->set_rules('namajabatan', 'Namajabatan', 'required');
        $this->form_validation->set_rules('jamkerja', 'jamkerja', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('tbl_edit_jabatan.php' , $data);
        } else {
            $this->Jabatan_models->ubah_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Jabatan</strong> berhasil diedit.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button> </div>');
            redirect('Admin/jabatan');
        }
        
    }

    public function hapus_data_jabatan($id){
        $this->Jabatan_models->hapus_jabatan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Jabatan</strong> berhasil dihapus.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button> </div>');
        redirect('Admin/jabatan');
    }

    // pegawai


    public function pegawai(){
        $data['pegawai'] = $this->Pegawai_models->pegawai_get();
        $data['jabatan'] = $this->Jabatan_models->jabatan_get();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('tbl_pegawai.php' , $data);
        }
        else {
            $data_pegawai = [
                'nik'  => $this->input->post('nik'),
                'nama_pegawai' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenisk'),
                'id_jabatan' => $this->input->post('jabatan'),
                'no_telepon' => $this->input->post('telepon'),
                'alamat' => $this->input->post('alamat')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>data pegawai</strong> berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> </div>');
            $this->db->insert('pegawai', $data_pegawai);
            redirect('admin/pegawai');
        }
    }

    public function edit_pegawai($id){
        $data['pegawai'] = $this->Pegawai_models->ambil_id($id);
        $data['jabatan'] = $this->Jabatan_models->jabatan_get();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('tbl_edit_pegawai.php' , $data);
        }
        else {
            $this->Pegawai_models->ubah_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>data pegawai</strong> berhasil diedit.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> </div>');
            redirect('Admin/pegawai');
        }
    }

    public function hapus_data_pegawai($id){
        $this->Pegawai_models->hapus_pegawai($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>data pegawai</strong> berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button> </div>');
        redirect('Admin/pegawai');
    }

    public function laporan_absensi(){
        $data['absensi'] = $this->Absensi_models->laporan_absensi();
        $this->load->view('tbl_absensi', $data);
    }

    }

