<?php
    Class Keranjang extends CI_Controller
    {
        public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Marketplace_model');
	}

    public function tampil_cart()
    {
        $judul['judul'] = 'Keranjang';
       // $data['data'] = $this->Marketplace_model->get_produk_all();

        $this->load->view('templates/header',$judul);
        $this->load->view('Keranjang/tampil_cart');
        $this->load->view('templates/footer');
    }
    function tambah()
    {
        $data_produk= array('kode_produk' => $this->input->post('kode_produk'),
                             'nama_produk' => $this->input->post('nama_produk'),
                             'harga_produk' => $this->input->post('harga_produk'),
                             //'gambar' => $this->input->post('gambar'),
                             'jumlah' =>$this->input->post('jumlah')
                            );
        $this->cart->insert($data_produk);
        redirect('Marketplace');
    }
 
    function hapus($rowid)
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'jumlah' =>0);
                $this->cart->update($data);
            }
        redirect('Keranjang/tampil_cart');
    }
 
    function ubah_cart()
    {
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $harga_produk = $cart['harga_produk'];
            //$gambar = $cart['gambar'];
            $amount = $price * $cart['jumlah'];
            $jumlah = $cart['jumlah'];
            $data = array('rowid' => $rowid,
                            'harga_produk' => $harga_produk,
                            //'gambar' => $gambar,
                            'amount' => $amount,
                            'jumlah' => $jumlah);
            $this->cart->update($data);
        }
        redirect('Keranjang/tampil_cart');
    }
 
       
    }
?>
