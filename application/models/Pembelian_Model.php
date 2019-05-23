<?php
class Pembelian_Model extends CI_Model
{
    public $kode_pesanan;
    public $kode_aksesoris;
    public $id_pembeli;
    public $total_harga;
    public $jumlah_barang;
    public $tanggal_beli;
    public $ongkir;
    
    function Model_Pembeli($pembeli)
    {
        $this->db->select("id_pembeli");
        $this->db->from('pembeli');
        $this->db->order_by('id_pembeli', "DESC");
        $id = $this->db->get()->row();
        $id_pembeli = substr($id->id_pembeli, 3);
        $id_pembeli += 1;
        $idPembeli = "PM0" . $id_pembeli;
        $data = array(
            'id_pembeli' => $idPembeli,
            'nama_pembeli' => "$pembeli[nama]",
            'no_telp' => "$pembeli[no_telp]",
            'email' => "$pembeli[email]",
            'kecamatan' => "$pembeli[kecamatan]",
            'kabupaten' => "$pembeli[kabupaten]",
            'provinsi' => "$pembeli[provinsi]",
            'kodepos' => "$pembeli[kodepos]",
            'alamat_lengkap' => "$pembeli[alamatlengkap]",
            'catatan' => "$pembeli[catatan]"
        );
        
        $this->db->insert('pembeli', $data);

        $query = "select *, count(kode_barang) as jumlah from keranjang group by kode_barang";
        $hasil = $this->db->query($query)->result_array();

        $query = "select sum(produk.harga_produk) as total from produk, keranjang where produk.kode_produk = keranjang.kode_barang group by keranjang.kode_barang";
        $total = $this->db->query($query)->result_array();

        // var_dump($total);
        // echo count($hasil);
        // echo $total[1]['total'];
        // echo random_string('alnum', 5);
        // die;

        $kode_unik = random_string('alnum', 5);
        // `kode_pesanan``id_pembeli``kode_produk``total_harga``ongkir``status``jumlah_produk``tanggal_beli``gambar`SELECT * FROM `transaksi` WHERE 1
        $i = 0;
        foreach($hasil as $h) {
            $data_transaksi = [
                'id_pembeli' => $idPembeli,
                'kode_unik' => $kode_unik,
                'kode_produk' => $h['kode_barang'],
                'total_harga' => $total[$i++]['total'],
                'ongkir' => 0,
                'status' => 'menunggu ongkir',
                'jumlah_produk' => $h['jumlah'],
                'tanggal_beli' => time(),
                'gambar' => NULL
            ];

            $this->db->insert('transaksi', $data_transaksi);

            $data_transaksi = [];
        }

        return $idPembeli;
    }
 
    function Model_ongkir($id)
    {
            $this->db->select("*");
            $this->db->from("pembeli");
            $this->db->join("transaksi", "pembeli.id_pembeli = transaksi.id_pembeli");
            $this->db->where('pembeli.id_pembeli', $id);
            return $this->db->get()->row();
    }
    
    
    public function upload_gambar() {
        $config['upload_path'] = 'bukti_pembayaran/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
      
        $this->load->library('upload', $config); 
        if($this->upload->do_upload('gambar')){ 
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
    }
  
    public function save_gambar($upload)
    {  
      $data = $this->db->get_where('transaksi', ['id_pembeli' => $this->session->userdata('temp_kode_pembeli')])->row_array();

      $this->db->set('gambar', $upload['file']['file_name']);
      $this->db->where('kode_unik', $data['kode_unik']);
      $this->db->update('transaksi');
      return $this->db->affected_rows();
    }
}

?>