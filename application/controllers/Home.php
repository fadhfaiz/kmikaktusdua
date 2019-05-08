<?php 
    Class Home extends CI_Controller
    {

        public function __construct(){
            parent::__construct();
            $this->load->model('Marketplace_model');
            $this->load->model('Counter_Model');
        }
		
        public function index()
        {
			
            $data['produk'] = $this->Marketplace_model->getDataProdukTerbaru();
            $data['judul'] = 'Selamat Datang di Kaktuskmi';

            $this->load->view('templates/header', $data);
            $this->load->view('home/index');
            $this->load->view('templates/footer');
			
			$this->Counter_Model->Model_Counter();
        }

        public function detail_tanaman($id)
        {
            $data['produk'] = $this->Marketplace_model->getByProduk($id);
            $data['judul'] = 'Disini Nama Produk';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/detail/detail_tanaman');
            $this->load->view('templates/footer'); 
			
        }
    }

?>