<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tampil_api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $sumber = 'https://api.themoviedb.org/4/list/1?api_key=aaba94de3aaae95350c5bc1cb5fdcf41';
        $get_sumber = file_get_contents($sumber);
        $data   = array(
            'biodata' => json_decode($get_sumber, true),
        );

        $this->load->view('tampil_api.php', $data);
    }

}