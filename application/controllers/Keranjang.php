<?php
    Class Keranjang extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Halaman Keranjang';

            $this->load->view('templates/header', $data);
            $this->load->view('keranjang/index');
            $this->load->view('templates/footer');
        }
    }
?>