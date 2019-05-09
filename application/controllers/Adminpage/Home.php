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
         $data['grafik'][0]=(float)$row['Senin'];
         $data['grafik'][1]=(float)$row['Selasa'];
         $data['grafik'][2]=(float)$row['Rabu'];
         $data['grafik'][3]=(float)$row['Kamis'];
         $data['grafik'][4]=(float)$row['Jumat'];
         $data['grafik'][5]=(float)$row['Sabtu'];
         $data['grafik'][6]=(float)$row['Minggu'];
        }
        $data["perhari"] = $this->Model_grafik->perhari();
        $data["perminggu"] = $this->Model_grafik->perminggu();
        $data["perbulan"] = $this->Model_grafik->perbulan();
        $data["pertahun"] = $this->Model_grafik->pertahun();
        $this->load->view('templates/header_admin', $judul);
        $this->load->view('adminpage/index',$data);
        $this->load->view('templates/footer');
    
    }
}


?>