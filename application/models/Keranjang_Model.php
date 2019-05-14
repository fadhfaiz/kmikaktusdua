<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Keranjang_Model extends CI_Model {


    function get_all_produk(){
        $hasil=$this->db->get('produk');
        return $hasil->result_array();
    }
}
?>