<?php
// untuk interaksi ke database
    class Marketplace_model extends CI_Model{
        public function getDataBarang(){
            $this->db->select("*");
            $this->db->from("tanaman");
            return $this->db->get()->result();
        }

        public function getById($id){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->where('kode_tanaman', $id);
            return $this->db->get()->row();
        }
    }

?>