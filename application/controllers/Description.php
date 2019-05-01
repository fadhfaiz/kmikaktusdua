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
        public function aglaonema()
        {
            $data['judul'] = 'Aglaonema';

            $this->load->view('templates/header', $data);
            $this->load->view('description/aglaonema');
            $this->load->view('templates/footer');
        }
        public function aloevera()
        {
            $data['judul'] = 'Aloevera';

            $this->load->view('templates/header', $data);
            $this->load->view('description/aloevera');
            $this->load->view('templates/footer');
        }
        public function lactea()
        {
            $data['judul'] = 'Lactea';

            $this->load->view('templates/header', $data);
            $this->load->view('description/lactea');
            $this->load->view('templates/footer');
        }
        public function sansivera()
        {
            $data['judul'] = 'sansivera';

            $this->load->view('templates/header', $data);
            $this->load->view('description/sansivera');
            $this->load->view('templates/footer');
        }
    }
?>