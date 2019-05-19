<?php
Class Verifikasi extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
    }
    public function verification_admin()
        {
            $data['judul'] = 'Halaman Verifikasi';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/verifikasi/verification_admin');
            $this->load->view('templates/footer');
        }
        public function ongkir_verification()
        {
            $data['judul'] = 'Halaman Detail Verifikasi';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/verifikasi/ongkir_verification');
            $this->load->view('templates/footer');
        }
        public function konfirmasi_verification()
        {
            $data['judul'] = 'Halaman Detail Verifikasi';

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/verifikasi/konfirmasi_verification');
            $this->load->view('templates/footer');
        }
}

?>