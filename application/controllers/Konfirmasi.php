<?php 
    Class Konfirmasi extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Konfirmasi Pembayaran';

            $this->load->view('templates/header', $data);
            $this->load->view('konfirmasi/index');
            $this->load->view('templates/footer');
        }
    }
?>