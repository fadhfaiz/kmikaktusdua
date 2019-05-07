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
      [ 'field' => 'kode_produk',
        'label' => 'kode_produk',
        'rules' => 'required'],
      [ 'field' => 'jenis_produk',
        'label' => 'jenis_produk',
        'rules' => 'required']
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
  
  public function upload_gambar_produk() {
    $config['upload_path'] = 'gambar/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
}

public function save_produk($upload)
{
  $data = array(
    'kode_produk'=>$this->session->userdata('kode_produk'),
    'nama_produk'=>$this->session->userdata('nama_produk'),
    'harga_produk' => $this->session->userdata('harga_produk'),
    'stok_produk' => $this->session->userdata('stok_produk'),
    'diameter'=>$this->session->userdata('diameter'),
    'tinggi' => $this->session->userdata('tinggi'),
    'jenis_produk' => $this->session->userdata('jenis_produk'),
    'catatan' => $this->session->userdata('catatan'),
    'gambar' => $upload['file']['name'],
   
  );
  
  $this->db->insert('produk', $data);
}
}