<?php  

class Home_m extends Ci_Model{

    function selectData(){
        return $this->db->query("Select * FROM tb_masjid")->result();
    }

    function detailnews($id){
        return $this->db->query("Select * FROM tb_berita WHERE id_berita='$id'")->result();
    }

    function selectTakmir(){
        return $this->db->query("Select * FROM tb_takmir")->result();
    }

    function selectFasilitas(){
        return $this->db->query("Select * FROM tb_fasilitas")->result();
    }

    function selectGaleri(){
        return $this->db->query("Select * FROM tb_galeri")->result();
    }

   
}