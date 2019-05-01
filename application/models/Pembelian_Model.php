<?php
class Pembelian_Model extends CI_Model
{

    function Model_Pembeli($pembeli)
    {
        $this->db->select("id_pembeli");
        $this->db->from('pembeli');
        $this->db->order_by('id_pembeli', "DESC");
        $id = $this->db->get()->row();
        $id_pembeli = substr($id->id_pembeli, 4);
        $id_pembeli += 1;
        $idPembeli = "PB00" . $id_pembeli;
        $data = array(
            'id_pembeli' => $idPembeli,
            'nama_pembeli' => "$pembeli[nama]",
            'no_telp' => "$pembeli[no_telp]",
            'email' => "$pembeli[email]",
            'kecamatan' => "$pembeli[kecamatan]",
            'kabupaten' => "$pembeli[kabupaten]",
            'provinsi' => "$pembeli[provinsi]",
            'kodepos' => "$pembeli[kodepos]",
            'alamatlengkap' => "$pembeli[alamatlengkap]",
            'catatan' => "$pembeli[catatan]"
        );
        
        $this->db->insert('pembeli', $data);
        return $idPembeli;
    }

    function Model_ongkir($ongkir)
    {
            $this->db->select("*");
            $this->db->from("pembeli");
            $this->db->where('id_pembeli', $ongkir);
            return $this->db->get()->row();
    }
}

?>