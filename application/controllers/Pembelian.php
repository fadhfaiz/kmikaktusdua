<?php 
    Class Pembelian extends CI_Controller
    {
        private $data;
        function __construct(){
            parent::__construct();

        $this->load->model("Pembelian_Model");
        $this->load->model("Menunggu_Model");
        $this->load->model("Keranjang_Model");
        $this->load->model("cart_model");
        $this->load->library("form_validation");
        $this->load->library("session");
        $this->data['data'] = $this->cart_model->getcart();
        $this->data['judul'] = 'KaktusKmi';
        }

        public function Data_pembeli()
        {
            $id = $this->Pembelian_Model->Model_Pembeli($this->input->post());
            redirect('pembelian/menunggu_ongkir/'.$id);
        }

        public function index()
        {
            $data['judul'] = 'Data Diri';

            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('no_telp','No_telp','required|numeric|min_length[7]|max_length[13]');
            $this->form_validation->set_rules('catatan','Catatan','required');
            $this->form_validation->set_rules('provinsi','Provinsi','required');
            $this->form_validation->set_rules('kabupaten','Kabupaten','required');
            $this->form_validation->set_rules('kecamatan','Kecamatan','required');
            $this->form_validation->set_rules('kodepos','Kode Pos','required');
            $this->form_validation->set_rules('alamatlengkap','Detail Alamat','required');

            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            if ($this->form_validation->run() != FALSE) {

                $id = $this->Pembelian_Model->Model_Pembeli($this->input->post());
                $id = $this->Pembelian_Model->transaksi($this->input->post());
                $this->session->set_flashdata('success');
                redirect('pembelian/menunggu_ongkir/'. $id);

            } else {

                $this->load->view('templates/header', $this->data);
                $this->load->view('pembelian/index',$data);
                $this->load->view('templates/footer');
                
            }
        }

        public function menunggu_ongkir($id)
        {
            
            $data['ongkir'] =$this->Pembelian_Model->Model_ongkir($id);
            $data['judul'] = 'Halaman Status Pengiriman';
            $data['data'] = $this->Keranjang_Model->tampil();

            $this->load->view('templates/header', $this->data);
            $this->load->view('pembelian/menunggu_ongkir',$data);
            $this->load->view('templates/footer');
        }

        public function menunggu_pembayaran($id)
        {
            $data['judul'] = 'Halaman Status Pengiriman';
            $data['ongkir'] =$this->Pembelian_Model->Model_ongkir($id);
            $data['data'] = $this->Keranjang_Model->tampil();
            $this->load->view('templates/header', $this->data);
            $this->load->view('pembelian/menunggu_pembayaran',$data);
            $this->load->view('templates/footer');
        }

        public function terkonfirmasi($id)
        {
            $data['judul'] = 'Halaman Status Pengiriman';
            $data['ongkir'] =$this->Pembelian_Model->Model_ongkir($id);
            $data['data'] = $this->Keranjang_Model->tampil();
            $this->load->view('templates/header', $this->data);
            $this->load->view('pembelian/terkonfirmasi',$data);
            $this->load->view('templates/footer');
        }

        public function registerpembeli()
        {
            $this->load->view('pembeli/index');
        }
    }

?>