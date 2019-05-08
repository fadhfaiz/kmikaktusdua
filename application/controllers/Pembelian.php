<?php 
    Class Pembelian extends CI_Controller
    {
        function __construct(){
            parent::__construct();

        $this->load->model("Pembelian_Model");
        $this->load->model("Menunggu_Model");
        $this->load->library("form_validation");
        }

        public function Data_pembeli()
        {
            $id = $this->Pembelian_Model->Model_Pembeli($this->input->post());
            redirect('pembelian/menunggu_ongkir/'.$id);
        }

        public function index()
        {

            $data['judul'] = 'Data Diri';

            $this->load->view('templates/header', $data);
            $this->load->view('pembelian/index');
            $this->load->view('templates/footer');
        }

        public function menunggu_ongkir($id)
        {
            
            $data['ongkir'] =$this->Pembelian_Model->Model_ongkir($id);
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

        // public function Simpandetailpesanan()
        // {

        //     $this->form_validation->set_rules('nama','nama','required');
        //     $this->form_validation->set_rules('email','email','required|valid_email');
        //     $this->form_validation->set_rules('no_telp','no_telp','required|exact_length[13]');
        //     $this->form_validation->set_rules('catatan','catatan','required');
        //     $this->form_validation->set_rules('provinsi','provinsi','required');
        //     $this->form_validation->set_rules('kabupaten','kabupaten','required');
        //     $this->form_validation->set_rules('kecamatan','kecamatan','required');
        //     $this->form_validation->set_rules('kodepos','kodepos','required');
        //     $this->form_validation->set_rules('alamatlengkap','alamatlengkap','required');

        //     if ($this->form_validation->run() == FALSE) {
        //         $this->load->view('templates/header', $data);
        //         $this->load->view('pembelian/index');
        //         // $this->load->view('templates/footer');
        //     } else {
        //         $this->Pembelian_Model->Model_Pembeli();
        //         $this->session->set_flashdata('flash', 'ditambahkan');

        //         redirect('pembelian/menunggu_ongkir');
        //     }

        // }
    }

?>