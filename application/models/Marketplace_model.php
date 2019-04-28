<?php
// untuk interaksi ke database
    class Marketplace_model extends CI_Model{
        public function getDataBarang(){
            return $this->db->query('SELECT 
                        t.kode_tanaman, t.nama_tanaman, t.harga, t.gambar
                        FROM 
                        tanaman t 
                        UNION 
                        SELECT 
                        a.kode_aksesoris, a.nama, a.harga, a.gambar 
                        FROM 
                        aksesoris a')->result();
        }

        public function getById($id){
            return $this->db->query("SELECT 
                        t.kode_tanaman, t.nama_tanaman, t.harga, t.gambar, t.bobot, t.diameter, t.tinggi, t.stok
                        FROM 
                        tanaman t 
                        WHERE t.kode_tanaman = '$id'
                        UNION 
                        SELECT 
                        a.kode_aksesoris, a.nama, a.harga, a.gambar, 0 AS bobot, 0 AS diameter, 0 AS tinggi, a.stok 
                        FROM 
                        aksesoris a
                        WHERE a.kode_aksesoris = '$id'")->row();
        }
    }

?>