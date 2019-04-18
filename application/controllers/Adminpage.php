<?php 
    Class Adminpage extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Halaman Admin';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/index');
            $this->load->view('templates/footer');
        }

        public function loginpage()
        {
            $data['judul'] = 'Halaman Login';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/loginpage');
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
    }

?>