<?php
Class Produk extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
        $this->load->model("Produk_Model");
        $this->load->library("form_validation");
    }
    public function edit_produk($kode_produk = null){
        if(!isset($kode_produk)) redirect('Adminpage/Produk/produk_admin');

        $produk = $this->Produk_Model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if($validation->run()){
            $produk->update_data_produk();
        }

        $data["produk"] = $produk->getIdDataProduk($kode_produk);

        if(!$data["produk"]) show_404();

        $judul['judul'] = 'Edit Produk';

        $this->load->view('templates/header_admin', $judul);
        $this->load->view('adminpage/produk/edit_produk',$data);
        $this->load->view('templates/footer');
    }
    public function hapus_produk($kode_produk = null)
    {
        if (!isset($kode_produk)) show_404();

        if($this->Produk_Model->hapus_data_produk($kode_produk))
        {
            redirect(site_url('Adminpage/Produk/product_admin'));
        }
    }

    public function product_admin()
    {
        $data['produk'] = $this->Produk_Model->getDataProduk();
        $data['judul'] = 'Produk Administrator';

        $this->load->view('templates/header_admin', $data);
        $this->load->view('adminpage/produk/product_admin');
        $this->load->view('templates/footer');
    }
    public function product_baru()
    {
        $data['judul'] = 'Halaman Menambah Produk Baru';

        
        $produk = $this->Produk_Model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());
        if($validation->run()){
            $produk->simpan_data_produk();
        }

        $this->load->view('templates/header_admin', $data);
        $this->load->view('adminpage/produk/product_baru');
        $this->load->view('templates/footer');
    }
}

?>