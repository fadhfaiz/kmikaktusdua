<?php 
    Class Marketplace extends CI_Controller
    {
        public function __construct()
        {

            parent::__construct();
            $this->load->model('Marketplace_model');
            $this->load->library('pagination');
            
        }

        public function index()
        {
            $config['base_url'] = site_url('marketplace/index'); //site url
            $config['total_rows'] = $this->db->count_all('produk'); //total row
            $config['per_page'] = 15;  //show record per halaman
            $config["uri_segment"] = 3;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);
         
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
     
            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
     
            //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
            $data['data'] = $this->Marketplace_model->getDataProduk($config["per_page"], $data['page']);           
     
            $data['pagination'] = $this->pagination->create_links();
            $judul['judul'] = 'Marketplace';

            $this->load->view('templates/header', $judul);
            $this->load->view('marketplace/index',$data);
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

        public function sansivera_product()
        {
            $data['sansivera'] = $this->Marketplace_model->getBySansivera();
            $data['judul'] = 'Produk Tanaman Sansivera';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/tanaman/sansivera_product');
            $this->load->view('templates/footer'); 
        }

        public function sukulen_product()
        {
            $data['sukulen'] = $this->Marketplace_model->getBySukulen();
            $data['judul'] = 'Produk Tanaman Sukulen';

            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/tanaman/sukulen_product');
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
            // var_dump($data['produk']);
            $this->load->view('templates/header', $data);
            $this->load->view('marketplace/index');
            $this->load->view('templates/footer');
        }
    }
?>