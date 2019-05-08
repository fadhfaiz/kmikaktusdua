<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of visitormodel
 *
 * @author https://roytuts.com
 */
class Model_grafik extends CI_Model {

    function statistik_pengunjung()
    {
     
     $sql= $this->db->query("
     
     select
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=0))),0)  AS `Januari`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=1))),0) AS `Februari`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=2))),0) AS `Maret`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=3))),0) AS `April`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=4))),0) AS `Mei`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=5))),0) AS `Juni`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=6))),0) AS `Juli`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=7))),0) AS `Agustus`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=8))),0) AS `September`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=9))),0) AS `Oktober`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=10))),0) AS `November`,
     ifnull((SELECT count(ip) FROM (tbcounter)WHERE((Month(date)=11))),0) AS `Desember`
    from tbcounter GROUP BY Month(date) 
     
     ");
     
     return $sql;
     
    } 
}

/* End of file visitormodel.php */
/* Location: ./application/models/visitormodel.php */