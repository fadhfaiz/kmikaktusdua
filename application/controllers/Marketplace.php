<?php 
    Class Marketplace extends CI_Controller
    {
        public function __construct()
        {

            parent::__construct();
            $this->load->model('Marketplace_model');
            
        }

        public function index()
        {
            $data['produk'] = $this->Marketplace_model->getDataProduk();
            // $data['aksesoris'] = $this->Marketplace_model->getDataAksesoris();
    
            $data['judul'] = 'Marketplace';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/index');
            $this->load->view('templates/footer');
        }

        public function detail_tanaman($id)
        {
            $data['produk'] = $this->Marketplace_model->getByProduk($id);
            $data['judul'] = 'Disini Nama Produk';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/detail/detail_tanaman');
            $this->load->view('templates/footer'); 
        }

        // public function detail_aksesoris($id)
        // {
        //     $data['aksesoris'] = $this->Marketplace_model->getByAksesoris($id);
        //     $data['judul'] = 'Disini Nama Produk';

        //     $this->load->view('templates/header', $data);
        //     $this->load->view('marketplace/detail/detail_aksesoris');
        //     $this->load->view('templates/footer'); 
        // }

        public function detail_paket($id)
        {
            $data['paket'] = $this->Marketplace_model->getByPaket($id);
            $data['judul'] = 'Disini Nama Produk';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/detail/detail_paket');
            $this->load->view('templates/footer'); 
        }

        public function kaktus_product()
        {
            $data['kaktus'] = $this->Marketplace_model->getByKaktus();
            $data['judul'] = 'Produk Tanaman Kaktus';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/tanaman/kaktus_product');
            $this->load->view('templates/footer'); 
        }

        public function aglonema_product()
        {
            $data['aglonema'] = $this->Marketplace_model->getByAglonema();
            $data['judul'] = 'Produk Tanaman Aglonema';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/tanaman/aglonema_product');
            $this->load->view('templates/footer'); 
        }

        public function aloevera_product()
        {
            $data['aloevera'] = $this->Marketplace_model->getByAloevera();
            $data['judul'] = 'Produk Tanaman Aloevera';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/tanaman/aloevera_product');
            $this->load->view('templates/footer'); 
        }

        public function drasanena_product()
        {
            $data['drasanena'] = $this->Marketplace_model->getByDrasanena();
            $data['judul'] = 'Produk Tanaman Drasanena';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/tanaman/drasanena_product');
            $this->load->view('templates/footer'); 
        }

        public function sansivera_product()
        {
            $data['drasanena'] = $this->Marketplace_model->getBySansivera();
            $data['judul'] = 'Produk Tanaman Sansivera';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/tanaman/sansivera_product');
            $this->load->view('templates/footer'); 
        }

        public function lactea_product()
        {
            $data['laktea'] = $this->Marketplace_model->getByLaktea();
            $data['judul'] = 'Produk Tanaman Lactea';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/tanaman/lactea_product');
            $this->load->view('templates/footer'); 
        }

        public function paket_product()
        {
            $data['paket'] = $this->Marketplace_model->getDataPaket();
            $data['judul'] = 'Produk Tanaman Lactea';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/paket/paket_product');
            $this->load->view('templates/footer'); 
        }
      
        public function pot_product()
        {
            $data['pot'] = $this->Marketplace_model->getDataPot();
            $data['judul'] = 'Produk Pot Tanaman';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/aksesoris/pot_product');
            $this->load->view('templates/footer');

        }

        public function batu_product()
        {
            $data['batu'] = $this->Marketplace_model->getDataBatu();
            $data['judul'] = 'Produk Batu Tanaman';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/aksesoris/batu_product');
            $this->load->view('templates/footer'); 
        }

        public function bibit_product()
        {
            $data['bibit'] = $this->Marketplace_model->getDataBibit();
            $data['judul'] = 'Produk Bibit Tanaman';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/aksesoris/bibit_product');
            $this->load->view('templates/footer'); 
        }
        
        public function cariproduk()
        {
            $keyword = $this->input->post('keyword');
            $data['produk'] = $this->Marketplace_model->getProdukKeyword($keyword);

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/index');
            $this->load->view('templates/footer');
        }
    }
?>