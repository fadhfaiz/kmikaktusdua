<?php 
    Class Article extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Artikel Kaktuskmi';

            $this->load->view('templates/header', $data);
            $this->load->view('article/index');
            $this->load->view('templates/footer');
        }
        public function artikel()
        {
            $data['judul'] = 'Artikel Kaktuskmi';

            $this->load->view('templates/header', $data);
            $this->load->view('article/artikel');
            $this->load->view('templates/footer');
        }
    }
?>