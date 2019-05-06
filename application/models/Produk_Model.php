<?php
class Produk_Model extends CI_Model
{  
  private $_table = "produk";
  public $kode_produk;
  public $nama_produk;
  public $gambar;
  public $harga_produk;
  public $stok_produk;
  public $diameter;
  public $tinggi;
  public $bobot;
  public $jenis_produk;
 
  public function rules()
  {
    return[
      [ 'field' => 'nama_produk',
        'label' => 'nama_produk',
        'rules' => 'required'],
      [ 'field' => 'harga_produk',
        'label' => 'harga_produk',
        'rules' => 'required'],
      [ 'field' => 'jenis_produk',
        'label' => 'jenis_produk',
        'rules' => 'required'],
      [ 'field' => 'stok_produk',
        'label' => 'stok_produk',
        'rules' => 'required',],
    ];
  }

  public function getDataProduk(){
    $this->db->select("*");
    $this->db->from("produk");
    return $this->db->get()->result();
}

  public function getIdDataProduk($kode_produk){
    return $this->db->get_where($this->_table, ["kode_produk" => $kode_produk])->row();
}
private function _uploadImage()
      {
          $config['upload_path']          = './assets/img/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['file_name']            = $this->kode_artikel;
          $config['overwrite']			= true;
          //$config['max_size']             = 1024; // 1MB
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;
      
          $this->load->library('upload', $config);
          
          if ($this->upload->do_upload('gambar')) {
              return $this->upload->data("file_name");
          }
         return "default.jpg"; 
}
  function simpan_data_produk()
  {

    $post = $this->input->post();
    $this->kode_produk = rand(0,100);
    $this->nama_produk = $post["nama_produk"];
    $this->harga_produk = $post["harga_produk"];
    $this->stok_produk = $post["stok_produk"];
    $this->diameter = $post["diameter"];
    $this->tinggi = $post["tinggi"];
    $this->bobot = $post["bobot"];
    $this->gambar = $this->_uploadImage();

    $this->db->insert($this->_table,$this);
  }

  function update_data_produk()
  {
		$post = $this->input->post();
    $this->kode_produk = $post["kode_produk"];
    $this->nama_produk = $post["nama_produk"];
    $this->harga_produk = $post["harga_produk"];
    $this->stok_produk = $post["stok_produk"];
    $this->diameter = $post["diameter"];
    $this->tinggi = $post["tinggi"];
    $this->bobot = $post["bobot"];
    $this->jenis_produk = $post["jenis_produk"];
  
    $this->db->update($this->_table,$this, array('kode_produk' => $post['kode_produk']));

  }	
  
  function hapus_data_produk($kode_produk)
  {
    return $this->db->delete($this->_table, array("kode_produk" => $kode_produk));
  }
  
}