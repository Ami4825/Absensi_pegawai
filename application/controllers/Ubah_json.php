<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ubah_json extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $sumber = 'http://localhost/test_absensi/json/data.json';
        $get_sumber = file_get_contents($sumber);
        $data   = array(
            'biodata' => json_decode($get_sumber, true),
        );

        $this->load->view('Tampil_ubah_json.php', $data);
    }

}