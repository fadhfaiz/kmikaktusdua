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

    function Beli_aksesoris(){
        $post = $this->input->post();
        $kode_pesanan +=1;
        $this->kode_pesanan = "AK".$kode_pesanan;
        $this->id_pembeli = $post["id_pembeli"];
        $this->total_harga = $post["total_harga"];
        $this->jumlah_barang = $post["jumlah_barang"];
        $this->ongkir = $post["ongkir"];
        $this->db->insert('beli_aksesoris',$this);
    }
    function Beli_tanaman(){

    }
    function Beli_paket(){

    }
    function Model_ongkir($ongkir)
    {
            $this->db->select("*");
            $this->db->from("pembeli");
            $this->db->where('id_pembeli', $ongkir);
            return $this->db->get()->row();
    }
}

?>