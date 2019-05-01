<?php
class Article_Model extends CI_Model
{
  private $_table = "artikel";

  public $kode_artikel="AR";
  public $judul;
  public $gambar;
  public $isi;
  public $tanggal;
 

// untuk interaksi ke database
        public function getDataArtikel(){
            $this->db->select("*");
            $this->db->from("artikel");
            return $this->db->get()->result();
        }

        public function getByIdArtikel($id){
            $this->db->select("*");
            $this->db->from("artikel");
            $this->db->where('kode_artikel', $id);
            return $this->db->get()->row();
        }

  public function rules()
  {
    return[
      [ 'field' => 'judul',
        'label' => 'judul',
        'rules' => 'required'],
      [ 'field' => 'isi',
        'label' => 'isi',
        'rules' => 'required',],
      [ 'field' => 'gambar',
        'label' => 'gambar',
        'rules' => 'required',]
    ];
  }

  function tampil_data_article()
  {
    $this->db->select('kode_artikel,judul,gambar,tanggal');
    $q = $this->db->get('artikel');

    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }
  }

  public function getById($kode_artikel)
    {
        return $this->db->get_where($this->_table, ["kode_artikel" => $kode_artikel])->row();
    }


  function simpan_data_article()
  {
    $this->load->helper('date');
    $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
    $time = time();
    $post = $this->input->post();
    $this->kode_artikel = rand(0,100);
    $this->judul = $post["judul"];
    $this->gambar = $post["gambar"];
    $this->isi = $post["isi"];
    $this->tanggal = mdate($datestring, $time);
    $this->db->insert($this->_table,$this);

  }

  function update_data_article()
  {
		$post = $this->input->post();
    $this->kode_artikel = $post["kode_artikel"];
    $this->judul = $post["judul"];
    $this->gambar = $post["gambar"];
    $this->isi = $post["isi"];
    $this->db->update($this->_table,$this, array('kode_artikel' => $post['kode_artikel']));

  }	
  
  function hapus_data_article($kode_artikel)
  {
    return $this->db->delete($this->_table, array("kode_artikel" => $kode_artikel));
  }
  
}