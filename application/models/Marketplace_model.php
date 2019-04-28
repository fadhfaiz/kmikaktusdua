<?php
// untuk interaksi ke database
    class Marketplace_model extends CI_Model{
        public function getDataTanaman(){
            $this->db->select("*");
            $this->db->from("tanaman");
            return $this->db->get()->result();
        }
        public function getDataAksesoris(){
            $this->db->select("*");
            $this->db->from("aksesoris");
            return $this->db->get()->result();
        }
        public function getDataPaket(){
            $this->db->select("*");
            $this->db->from("paket");
            return $this->db->get()->result();
        }

        public function getByTanaman($id){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->where('kode_tanaman', $id);
            return $this->db->get()->row();
        }
        public function getByAksesoris($id){
            $this->db->select("*");
            $this->db->from("aksesoris");
            $this->db->where('kode_aksesoris', $id);
            return $this->db->get()->row();
        }
        public function getByPaket($id){
            $this->db->select("*");
            $this->db->from("paket");
            $this->db->where('kode_paket', $id);
            return $this->db->get()->row();
        }
    }

?>