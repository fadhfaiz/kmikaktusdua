<?php
    Class Keranjang extends CI_Controller
    {
        private $data;
        public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		//$this->load->model('Marketplace_model');
        $this->load->model('Keranjang_Model');
        $this->load->model('cart_model');
        $this->data['data'] = $this->cart_model->getcart();
        
    }
 
    public function tampil_cart()
    {
        $data['judul'] = 'Keranjang';
      
        $data['kategori'] = $this->Keranjang_Model->get_kategori_all();
        $data['data'] = $this->Keranjang_Model->tampil();
        $this->load->view('templates/header',$this->data);
        $this->load->view('Keranjang/tampil_cart',$data);
        $this->load->view('templates/footer');
    }
    public function hapus($kode){
       
        if($this->Keranjang_Model->hapus($kode)){
            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">"pesan di hapus"</div>');
        }else{
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">"pesan gagal dihapus"</div>');
        }

        redirect('Keranjang/tampil_cart');
    }
    public function check_out()
    {    
        $this->pagination->initialize($config);
        $data['kategori'] = $this->Keranjang_Model->get_kategori_all();
        $this->load->view('themes/header',$data);
        $this->load->view('shopping/check_out',$data);
        $this->load->view('themes/footer');
    }
  
       
    }
?>
