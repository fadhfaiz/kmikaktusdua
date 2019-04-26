<?php
Class Produk extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
    }
    public function product_admin()
    {
        $data['judul'] = 'Produk Administrator';

        $this->load->view('templates/header_admin', $data);
        $this->load->view('adminpage/produk/product_admin');
        $this->load->view('templates/footer');
    }
    public function product_baru()
    {
        $data['judul'] = 'Halaman Menambah Produk Baru';

        $this->load->view('templates/header_admin', $data);
        $this->load->view('adminpage/produk/product_baru');
        $this->load->view('templates/footer');
    }
}

?>