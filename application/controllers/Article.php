<?php 
    Class Article extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('Article_Model');
            
        }

        public function index()
        {
            
            $data['artikelku'] = $this->Article_Model->getDataArtikel();
            $data['artikelbaru'] = $this->Article_Model->getArtikelBaru();
            $judul['judul'] = 'Artikel Kaktuskmi';

            $this->load->view('templates/header' ,$judul);
            $this->load->view('article/index', $data);
            $this->load->view('templates/footer');
        }
       
        public function artikel($id)
        {                           
            $data['artikelku'] = $this->Article_Model->getByIdArtikel($id);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            $data['judul'] = 'Artikel Kaktuskmi';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            $this->load->view('templates/header', $data);
            $this->load->view('article/artikel');
            $this->load->view('templates/footer');
        }
    }
?>