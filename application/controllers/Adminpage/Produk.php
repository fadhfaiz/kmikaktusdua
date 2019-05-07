<?php
Class Produk extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
        $this->load->library('upload');
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
      
        $judul['judul'] = 'Produk Administrator';
        
        $data["produk"] = $this->Produk_Model->getDataProduk();

        $this->load->view('templates/header_admin',$judul);
        $this->load->view('adminpage/produk/product_admin' ,$data);
        $this->load->view('templates/footer');
    }
    public function product_baru()
    {
        $data['judul'] = 'Halaman Menambah Produk Baru';
   
        $validation = $this->form_validation;
        $validation->set_rules($this->Produk_Model->rules());

        $dataku = [
            "kode_produk" => $this->input->post('kode_produk'),
            "nama_produk" => $this->input->post('nama_produk'),
            "harga_produk" => $this->input->post('harga_produk'),
            "stok_produk" => $this->input->post('stok_produk'),
            "diameter" => $this->input->post('diameter'),
            "tinggi" => $this->input->post('tinggi'),
            "jenis_produk" => $this->input->post('jenis_produk'),
            "catatan" => $this->input->post('catatan'),
        ];

        $this->session->set_userdata($dataku);

        if($validation->run()){
            $this->Produk_Model->save_produk($this->Produk_Model->upload_gambar_produk());

            $this->session->set_flashdata('sukses','berhasil disimpan');
        }

        $this->load->view('templates/header_admin', $data);
        $this->load->view('adminpage/produk/product_baru');
        $this->load->view('templates/footer');
    }
}

?>