<?php 
    Class Marketplace extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Marketplace';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/index');
            $this->load->view('templates/footer');
        }

        public function detail_product()
        {
            $data['judul'] = 'Disini Nama Produk';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/detail_product');
            $this->load->view('templates/footer'); 
        }
    }
?>