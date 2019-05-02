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
        $this->load->model('Marketplace_model');
    }
    public function edit_tanaman($kode_tanaman = null){
        if(!isset($kode_tanaman)) redirect('Adminpage/Produk/produk_admin');

        $tanaman = $this->Produk_Model;
        $validation = $this->form_validation;
        $validation->set_rules($tanaman->rules());

        if($validation->run()){
            $artikel->update_data_produktanaman();
            $this->session->set_flashdata('sukses','berhasil disimpan');

        }

        $data["tanaman"] = $tanaman->getBytanaman($kode_tanaman);

        if(!$data["tanaman"]) show_404();

        $judul['judul'] = 'Edit Produk Tanaman';

        $this->load->view('templates/header_admin', $judul);
        $this->load->view('adminpage/produk/edit_tanaman',$data);
        $this->load->view('templates/footer');
    }
    public function product_admin()
    {
        $data['tanaman'] = $this->Marketplace_model->getDataTanaman();
        $data['aksesoris'] = $this->Marketplace_model->getDataAksesoris();
        $data['paket'] = $this->Marketplace_model->getDataPaket();
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