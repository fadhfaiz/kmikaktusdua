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

        public function getDataPot(){
            $this->db->select("*");
            $this->db->from("aksesoris");
            $this->db->where('jenis_aksesoris = "Pot"');
            return $this->db->get()->result();
        }

        public function getDataBibit(){
            $this->db->select("*");
            $this->db->from("aksesoris");
            $this->db->where('jenis_aksesoris = "Bibit"');
            return $this->db->get()->result();
        }

        public function getDataBatu(){
            $this->db->select("*");
            $this->db->from("aksesoris");
            $this->db->where('jenis_aksesoris = "Batu"');
            return $this->db->get()->result();
        }

        public function getByKaktus(){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->where('jenis_tanaman = "Kaktus"');
            return $this->db->get()->result();
        }

        public function getByAglonema(){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->where('jenis_tanaman = "Aglonema"');
            return $this->db->get()->result();
        }
        public function getBySansivera(){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->where('jenis_tanaman = "Sansivera"');
            return $this->db->get()->result();
        }

        public function getByLaktea(){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->where('jenis_tanaman = "Lactea"');
            return $this->db->get()->result();
        }

        public function getByDrasanena(){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->where('jenis_tanaman = "Drasanena"');
            return $this->db->get()->result();
        }

        public function getByAloevera(){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->where('jenis_tanaman = "Aloevera"');
            return $this->db->get()->result();
        }

        public function getDataProduk(){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->limit(5);
            $this->db->order_by('kode_tanaman', 'ASC');
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

        public function getProdukKeyword($keyword){
            $this->db->select("*");
            $this->db->from("tanaman");
            $this->db->like("nama_tanaman", $keyword);
            $this->db->or_like("jenis_tanaman", $keyword);
            return $this->db->get()->row();
        }
    }

?>