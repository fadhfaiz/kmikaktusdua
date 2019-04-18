<?php 
    Class Pembelian extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Data Diri';

            $this->load->view('templates/header', $data);
            $this->load->view('pembelian/index');
            $this->load->view('templates/footer');
        }

        public function status_kirim()
        {
            $data['judul'] = 'Halaman Status Pengiriman';

            $this->load->view('templates/header', $data);
            $this->load->view('pembelian/status_kirim');
            $this->load->view('templates/footer');
        }
    }

?>