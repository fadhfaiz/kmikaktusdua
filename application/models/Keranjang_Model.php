<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Keranjang_Model extends CI_Model {

    public function get_produk_all()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }
 
    public function get_produk_kategori($kategori)
    {
        if($kategori>0)
            {
                $this->db->where('jenis_produk',$kategori);
            }
        $query = $this->db->get('produk');
        return $query->result_array();
    }
 
    public function get_kategori_all()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }
    
    function ambil_ip_pengunjung() {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
    }
			
	
    public function addToCart($kode){
        $cart =["ip" => $this->ambil_ip_pengunjung(),"kode_barang" => $kode];
       
        return $this->db->insert('keranjang',$cart);
    }
    public function tampil($kode = 0){
        $ip = $this->ambil_ip_pengunjung();
        $query = "
            select
                DISTINCT 
                keranjang.id as kode, 
                keranjang.kode_barang,
                produk.nama_produk as nama,
                produk.harga_produk as harga, 
                count(keranjang.id) as jumlah, 
                sum(produk.harga_produk) as total 
            from 
            produk 
            join 
            keranjang 
            on 
            produk.kode_produk = keranjang.kode_barang 
            WHERE keranjang.ip =  '$ip'
            group by produk.kode_produk";
        
        return $this->db->query($query)->result_array();
    
        
    }
    public function updateCart($kode){
        
    }
    public function hapus($kode){
        return $this->db->delete('keranjang',['id' =>$kode]);
    }
}
?>