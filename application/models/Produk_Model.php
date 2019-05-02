<?php
class Produk_Model extends CI_Model
{  
  public $kode_tanaman;
  public $nama_tanaman;
  public $gambar;
  public $harga;
  public $stok;
  public $diameter;
  public $tinggi;
  public $bobot;
  public $jenis_tanaman;
 
  public function rules()
  {
    return[
      [ 'field' => 'harga',
        'label' => 'harga',
        'rules' => 'required'],
      [ 'field' => 'stok',
        'label' => 'stok',
        'rules' => 'required',],
      [ 'field' => 'gambar',
        'label' => 'gambar',
        'rules' => 'required',]
    ];
  }

  function update_data_produktanaman()
  {
	$post = $this->input->post();
    $this->kode_tanaman = $post["kode_tanaman"];
    $this->nama_tanaman = $post["nama_tanaman"];
    $this->harga = $post["harga"];
    $this->gambar = $post["gambar"];
    $this->stok = $post["stok"];
    $this->diameter = $post["diameter"];
    $this->tinggi = $post["tinggi"];
    $this->bobot = $post["bobot"];
    $this->jenis_tanaman = $post["jenis_tanaman"];
    $this->db->update("tanaman",$this, array('kode_tanaman' => $post['kode_tanaman']));

  }	
  public function getBytanaman($kode_tanaman)
  {
      return $this->db->get_where("tanaman", ["kode_tanaman" => $kode_tanaman])->row();
  }
  
  function hapus_data_article($kode_artikel)
  {
    return $this->db->delete("tanaman", array("kode_tanaman" => $kode_tanaman));
  }
  
}