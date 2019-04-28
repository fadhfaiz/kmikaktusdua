<?php
class Login extends CI_Controller
{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Login_Model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Admin';

        $this->load->view('templates/header_admin', $data);
        $this->load->view('adminpage/loginpage');
        $this->load->view('templates/footer');
    }

   function aksi_login(){
       $user = $this->input->post('username');
       $pass = $this->input->post('password');
       $where = array(
           'username' => $user,
           'password' => $pass
       );
       $cek = $this->Login_Model->cek_login("penjual",$where)->num_rows();
            if($cek > 0){
    
                $data_session = array(
                    'nama' => $username,
                    'status' => "Login"
                    );
    
                $this->session->set_userdata($data_session);
    
                redirect(base_url("Adminpage/Home"));
    
            }else{
                echo "Username dan password salah !";
            }
   }
   
   function logout(){
    $this->session->sess_destroy();
    redirect(base_url('Login'));
}
}

?>
