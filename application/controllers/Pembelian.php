<?php 
    Class Pembelian extends CI_Controller
    {
        function __construct(){
            parent::__construct();

        $this->load->model("Pembelian_Model");
        $this->load->model("Menunggu_Model");
        $this->load->library("form_validation");
        $this->load->library("session");
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
            $this->form_validation->set_rules('alamatlengkap','Alamat Lengkap','required');

            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            if ($this->form_validation->run() != FALSE) {

                $id = $this->Pembelian_Model->Model_Pembeli($this->input->post());
                $this->session->set_flashdata('success');
                redirect('pembelian/menunggu_ongkir/'. $id);

            } else {

                $this->load->view('templates/header', $data);
                $this->load->view('pembelian/index');
                $this->load->view('templates/footer');
                
            }

            // $this->load->view('templates/header', $data);
            // $this->load->view('pembelian/index');
            // $this->load->view('templates/footer');
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

        public function registerpembeli()
        {
            $this->load->view('pembeli/index');
        }
    }

?>