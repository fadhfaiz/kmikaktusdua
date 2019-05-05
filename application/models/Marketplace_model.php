<?php
// untuk interaksi ke database
    class Marketplace_model extends CI_Model{

        public function getDataProduk(){
            $this->db->select("*");
            $this->db->from("produk");
            return $this->db->get()->result();
        }

        // public function getDataAksesoris(){
        //     $this->db->select("*");
        //     $this->db->from("produk");
        //     return $this->db->get()->result();
        // }
        public function getDataPot(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('jenis_produk = "Pot"');
            return $this->db->get()->result();
        }

        public function getDataBibit(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('jenis_produk = "Bibit"');
            return $this->db->get()->result();
        }

        public function getDataBatu(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('jenis_produk = "Batu"');
            return $this->db->get()->result();
        }

        public function getByKaktus(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('jenis_produk = "Kaktus"');
            return $this->db->get()->result();
        }

        public function getByAglonema(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('jenis_produk = "Aglonema"');
            return $this->db->get()->result();
        }
        public function getBySansivera(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('jenis_produk = "Sansivera"');
            return $this->db->get()->result();
        }

        public function getByLaktea(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('jenis_produk = "Lactea"');
            return $this->db->get()->result();
        }

        public function getByDrasanena(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('jenis_produk = "Drasanena"');
            return $this->db->get()->result();
        }

        public function getByAloevera(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('jenis_produk = "Aloevera"');
            return $this->db->get()->result();
        }

        public function getDataProdukTerbaru(){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->limit(5);
            $this->db->order_by('kode_produk', 'DESC');
            return $this->db->get()->result();
        }

        public function getByProduk($id){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->where('kode_produk', $id);
            return $this->db->get()->row();
        }

        // public function getByAksesoris($id){
        //     $this->db->select("*");
        //     $this->db->from("produk");
        //     $this->db->where('kode_aksesoris', $id);
        //     return $this->db->get()->row();
        // }

        public function getProdukKeyword($keyword){
            $this->db->select("*");
            $this->db->from("produk");
            $this->db->like("nama_produk", $keyword);
            $this->db->or_like("jenis_produk", $keyword);
            return $this->db->get()->row();
        }
    }

?>