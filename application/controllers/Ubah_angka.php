<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ubah_angka extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('tampil_ubah_angka.php');
    }

}