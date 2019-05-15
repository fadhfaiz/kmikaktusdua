<?php 
    Class Konfirmasi extends CI_Controller
    {
        private $data;
        public function __construct(){
            parent::__construct();
            $this->load->model('cart_model');

            $this->data['data'] = $this->cart_model->getcart();
            $this->data['judul'] = 'KaktusKmi';
            
        }
        public function index()
        {
            $data['judul'] = 'Konfirmasi Pembayaran';

            $this->load->view('templates/header', $this->data);
            $this->load->view('konfirmasi/index',$data);
            $this->load->view('templates/footer');
        }
    }
?>