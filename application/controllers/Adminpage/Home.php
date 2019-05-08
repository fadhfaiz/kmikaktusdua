<?php
Class Home extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
        $this->load->library('form_validation');
        $this->load->model("Model_grafik");
    }
    Public function index()
    {
        $judul['judul'] = 'Halaman Admin';
        foreach($this->Model_grafik->statistik_pengunjung()->result_array() as $row)
        {
         $data['grafik'][]=(float)$row['Januari'];
         $data['grafik'][]=(float)$row['Februari'];
         $data['grafik'][]=(float)$row['Maret'];
         $data['grafik'][]=(float)$row['April'];
         $data['grafik'][]=(float)$row['Mei'];
         $data['grafik'][]=(float)$row['Juni'];
         $data['grafik'][]=(float)$row['Juli'];
         $data['grafik'][]=(float)$row['Agustus'];
         $data['grafik'][]=(float)$row['September'];
         $data['grafik'][]=(float)$row['Oktober'];
         $data['grafik'][]=(float)$row['November'];
         $data['grafik'][]=(float)$row['Desember'];
        }
        $this->load->view('templates/header_admin', $judul);
        $this->load->view('adminpage/index',$data);
        $this->load->view('templates/footer');
    
    }
}


?>