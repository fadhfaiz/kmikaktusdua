<?php

class Model_grafik extends CI_Model {

    function statistik_pengunjung_perbulan()
    {
     
     $sql= $this->db->query("
     
     select
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=1) AND (YEAR(date)=YEAR(NOW())))),0) AS `Januari`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=2) AND (YEAR(date)=YEAR(NOW())))),0) AS `Februari`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=3) AND (YEAR(date)=YEAR(NOW())))),0) AS `Maret`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=4) AND (YEAR(date)=YEAR(NOW())))),0) AS `April`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=5) AND (YEAR(date)=YEAR(NOW())))),0) AS `Mei`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=6) AND (YEAR(date)=YEAR(NOW())))),0) AS `Juni`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=7) AND (YEAR(date)=YEAR(NOW())))),0) AS `Juli`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=8) AND (YEAR(date)=YEAR(NOW())))),0) AS `Agustus`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=9) AND (YEAR(date)=YEAR(NOW())))),0) AS `September`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=10) AND (YEAR(date)=YEAR(NOW())))),0) AS `Oktober`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=11) AND (YEAR(date)=YEAR(NOW())))),0) AS `November`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((Month(date)=12) AND (YEAR(date)=YEAR(NOW())))),0) AS `Desember`
     from tbcounter GROUP BY YEAR(date)
     ");
     
     return $sql;
     
    } 
    function statistik_pengunjung_perhari()
    {
     
     $sql= $this->db->query("
     
     select
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((weekday(date)= 0) AND (Month(date)=MONTH(NOW()))AND (YEAR(date)=YEAR(NOW())))),0) AS `Senin`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((weekday(date)= 1) AND (Month(date)=MONTH(NOW()))AND (YEAR(date)=YEAR(NOW())))),0) AS `Selasa`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((weekday(date)= 2) AND (Month(date)=MONTH(NOW()))AND (YEAR(date)=YEAR(NOW())))),0) AS `Rabu`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((weekday(date)= 3) AND (Month(date)=MONTH(NOW()))AND (YEAR(date)=YEAR(NOW())))),0) AS `Kamis`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((weekday(date)= 4) AND (Month(date)=MONTH(NOW()))AND (YEAR(date)=YEAR(NOW())))),0) AS `Jumat`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((weekday(date)= 5) AND (Month(date)=MONTH(NOW()))AND (YEAR(date)=YEAR(NOW())))),0) AS `Sabtu`,
     ifnull((SELECT SUM(hits) FROM (tbcounter)WHERE((weekday(date)= 6) AND (Month(date)=MONTH(NOW()))AND (YEAR(date)=YEAR(NOW())))),0) AS `Minggu`

     from tbcounter GROUP BY YEAR(date)
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
        $this->db->group_by("DATE(date)");
        return $this->db->get()->result();
    }
    function perbulan(){
        $this->db->select("MONTH(date) as bulan");
        $this->db->select('SUM(hits) as jumlah_bulan');
        $this->db->from("tbcounter");
        $this->db->where('MONTH(date) = MONTH(NOW()) AND YEAR(date) = YEAR(NOW())');
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
