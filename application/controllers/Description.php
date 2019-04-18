<?php 
    Class Description extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Deskripsi Kaktuskmi';

            $this->load->view('templates/header', $data);
            $this->load->view('description/index');
            $this->load->view('templates/footer');
        }

        public function kaktus()
        {
            $data['judul'] = 'Kaktus';

            $this->load->view('templates/header', $data);
            $this->load->view('description/kaktus');
            $this->load->view('templates/footer');
        }
    }
?>