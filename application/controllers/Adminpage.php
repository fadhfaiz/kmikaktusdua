<?php 
    Class Adminpage extends CI_Controller
    {
        function __construct(){
            parent::__construct();
        
            if($this->session->userdata('status') != "Login"){
                redirect(base_url("Login"));
            }
        }
        Public function index(){
            $data['judul'] = 'Halaman Admin';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/index');
            $this->load->view('templates/footer');
        
        }
        public function product_admin()
        {
            $data['judul'] = 'Produk Administrator';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/product_admin');
            $this->load->view('templates/footer');
        }

        public function article_admin()
        {
            $data['judul'] = 'Artikel Administrator';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/article_admin');
            $this->load->view('templates/footer');
        }

        public function verification_admin()
        {
            $data['judul'] = 'Halaman Verifikasi';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/verification_admin');
            $this->load->view('templates/footer');
        }

        public function ongkir_verification()
        {
            $data['judul'] = 'Halaman Detail Verifikasi';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/ongkir_verification');
            $this->load->view('templates/footer');
        }
        public function konfirmasi_verification()
        {
            $data['judul'] = 'Halaman Detail Verifikasi';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/konfirmasi_verification');
            $this->load->view('templates/footer');
        }

        public function article_page()
        {
            $data['judul'] = 'Halaman Isi Artikel';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/article_page');
            $this->load->view('templates/footer');
        }
    }

?>