<?php
Class Home extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
    }
    Public function index(){
        $data['judul'] = 'Halaman Admin';

        $this->load->view('templates/header_admin', $data);
        $this->load->view('adminpage/index');
        $this->load->view('templates/footer');
    
    }
}

?>