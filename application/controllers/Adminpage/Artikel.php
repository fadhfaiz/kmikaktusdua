<?php
Class Artikel extends CI_Controller
{
    
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
        $this->load->model("Article_Model");
        $this->load->library("form_validation");
    }
    
    public function article_admin()
    {
        $judul['judul'] = 'Artikel Administrator';

        $data["artikel"] = $this->Article_Model->tampil_data_article();

        $this->load->view('templates/header_admin',$judul);
        $this->load->view('adminpage/artikel/article_admin',$data);
        $this->load->view('templates/footer');
    }
    
    public function edit_article($kode_artikel = null){

        if(!isset($kode_artikel)) redirect('Adminpage/Artikel/article_admin');

        $artikel = $this->Article_Model;
        $validation = $this->form_validation;
        $validation->set_rules($artikel->rules());

        if($validation->run()){
            $artikel->update_data_article();
            $this->session->set_flashdata('sukses','berhasil disimpan');

        }

        $data["artikel"] = $artikel->getById($kode_artikel);

        if(!$data["artikel"]) show_404();

        $judul['judul'] = 'Edit Artikel';

        $this->load->view('templates/header_admin', $judul);
        $this->load->view('adminpage/artikel/edit_article',$data);
        $this->load->view('templates/footer');
    }

    public function hapus_article($kode_artikel = null)
    {
        if (!isset($kode_artikel)) show_404();

        if($this->Article_Model->hapus_data_article($kode_artikel))
        {
            redirect(site_url('Adminpage/Artikel/article_admin'));
        }
    }

    public function article_page()
    {
        $data['judul'] = 'Halaman Isi Artikel';

        $artikel = $this->Article_Model;
        $validation = $this->form_validation;
        $validation->set_rules($artikel->rules());
        if($validation->run()){
            $artikel->simpan_data_article();
            $this->session->set_flashdata('sukses','berhasil disimpan');
        }

        $this->load->view('templates/header_admin', $data);
        $this->load->view('adminpage/artikel/article_page');
        $this->load->view('templates/footer');
    }
}

?>
