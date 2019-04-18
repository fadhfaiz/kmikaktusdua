<?php 
    Class Home extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Selamat Datang di Kaktuskmi';

            $this->load->view('templates/header', $data);
            $this->load->view('home/index');
            $this->load->view('templates/footer');
        }
    }

?>