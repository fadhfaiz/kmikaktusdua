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
        $idPembeli = "PM00" . $id_pembeli;
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

        return $idPembeli;
    }
    function transaksi($id){
        $this->db->select("*");
        $this->db->from("transaksi");
        $this->db->join("pembeli","transaksi.id_pembeli = pembeli.id_pembeli","inner");
        $this->db->join("produk","transaksi.kode_produk = produk.kode_produk","inner");
        $query = $this->db->get()->row();
        $kode_pesanan = substr($query->kode_pesanan,3);
        $kode_pesanan += 1;
        $kode_pesanan ="KD00". $kode_pesanan;
        
        $data = array(
            'kode_pesanan' => $kode_pesanan,
            'id_pembeli' => "$id[id_pembeli]",
            'kode_produk' => "$id[kode_produk]",
            'total_harga' => "$id[total_harga]",
            'ongkir' => "$id[ongkir]",
            'jumlah_produk' => "$id[jumlah_produk]",
            'tanggal_beli' => time(),
            'status' => "Menunggu Ongkir"

        );

        $this->db->insert('transaksi',$data);
    }

    function Model_ongkir($id)
    {
            $this->db->select("*");
            $this->db->from("pembeli");
            $this->db->where('id_pembeli', $id);
            return $this->db->get()->row();
    }
    
}

?>