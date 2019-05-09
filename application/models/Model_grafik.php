<?php

class Model_grafik extends CI_Model {

    function statistik_pengunjung()
    {
     
     $sql= $this->db->query("
     
     select
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Day(date)=1))),0)  AS `Senin`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Day(date)=2))),0) AS `Selasa`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Day(date)=2))),0) AS `Rabu`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Day(date)=3))),0) AS `Kamis`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Day(date)=4))),0) AS `Jumat`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Day(date)=5))),0) AS `Sabtu`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Day(date)=6))),0) AS `Minggu`
    from tbcounter GROUP BY Day(date) 
     
     ");
     
     return $sql;
     
    } 
    function perhari(){
        // $date = new DateTime("now");
        // $curr_date = $date->format('Y-m-d ');
        $this->db->select("*");
        $this->db->select('SUM(hits) as hari');
        $this->db->from("tbcounter");
        $this->db->where('date = DATE(NOW())');
        $this->db->group_by("date");
        return $this->db->get()->result();
    }
    function perminggu(){
   
        $this->db->select("YEARWEEK(date) as minggu");
        $this->db->select('SUM(hits) as jumlah_minggu');
        $this->db->from("tbcounter");
        $this->db->where('YEARWEEK(date) = YEARWEEK(NOW())');
        $this->db->group_by("YEARWEEK(date)");
        return $this->db->get()->result();
    
    }
    function perbulan(){
        $this->db->select("MONTH(date) as bulan");
        $this->db->select('SUM(hits) as jumlah_bulan');
        $this->db->from("tbcounter");
        $this->db->where('MONTH(date) = MONTH(NOW())');
        $this->db->group_by("MONTH(date)");
        return $this->db->get()->result();

    }
    function pertahun(){
        $this->db->select("YEAR(date) as tahun");
        $this->db->select('SUM(hits) as jumlah_tahun');
        $this->db->from("tbcounter");
        $this->db->where('YEAR(date) = YEAR(NOW())');
        $this->db->group_by("YEAR(date)");
        return $this->db->get()->result();

    }
}

/* End of file visitormodel.php */
/* Location: ./application/models/visitormodel.php */