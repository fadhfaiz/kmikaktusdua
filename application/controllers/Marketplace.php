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
        public function kaktus_product()
        {
            $data['judul'] = 'Produk Tanaman Kaktus';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/kaktus_product');
            $this->load->view('templates/footer'); 
        }
        public function aglonema_product()
        {
            $data['judul'] = 'Produk Tanaman Aglonema';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/aglonema_product');
            $this->load->view('templates/footer'); 
        }
        public function drasanena_product()
        {
            $data['judul'] = 'Produk Tanaman Drasanena';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/drasanena_product');
            $this->load->view('templates/footer'); 
        }
        public function lactea_product()
        {
            $data['judul'] = 'Produk Tanaman Lactea';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/lactea_product');
            $this->load->view('templates/footer'); 
        }
        public function paket_product()
        {
            $data['judul'] = 'Produk Tanaman Lactea';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/paket_product');
            $this->load->view('templates/footer'); 
        }
        public function aloevera_product()
        {
            $data['judul'] = 'Produk Tanaman Aloevera';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/aloevera_product');
            $this->load->view('templates/footer'); 
        }
        public function pot_product()
        {
            $data['judul'] = 'Produk Pot Tanaman';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/pot_product');
            $this->load->view('templates/footer'); 
        }
        public function batu_product()
        {
            $data['judul'] = 'Produk Batu Tanaman';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/batu_product');
            $this->load->view('templates/footer'); 
        }
        public function bibit_product()
        {
            $data['judul'] = 'Produk Bibit Tanaman';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/bibit_product');
            $this->load->view('templates/footer'); 
        }
    }
?>