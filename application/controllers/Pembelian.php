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

        public function menunggu_ongkir()
        {
            $data['judul'] = 'Halaman Status Pengiriman';

            $this->load->view('templates/header', $data);
            $this->load->view('pembelian/menunggu_ongkir');
            $this->load->view('templates/footer');
        }
        public function menunggu_pembayaran()
        {
            $data['judul'] = 'Halaman Status Pengiriman';

            $this->load->view('templates/header', $data);
            $this->load->view('pembelian/menunggu_pembayaran');
            $this->load->view('templates/footer');
        }
        public function terkonfirmasi()
        {
            $data['judul'] = 'Halaman Status Pengiriman';

            $this->load->view('templates/header', $data);
            $this->load->view('pembelian/terkonfirmasi');
            $this->load->view('templates/footer');
        }
    }

?>