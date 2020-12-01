<?php  

class Jadwal_m extends Ci_model{

    function selectDataKajian(){
        return $this->db->query(" SELECT * FROM tb_jadwal_kajian")->result();
    }

    public function selectDataJumat(){
        return $this->db->query("SELECT * FROM tb_jadwal_jumatan")->result();
    }

    function selectDataTpa(){
        return $this->db->query(" SELECT * FROM tb_jadwal_tpa")->result();
    }

    function selectDataLainnya(){
        return $this->db->query(" SELECT * FROM tb_jadwal_lainnya")->result();
    }

    function selectid($id){
        return $this->db->query("Select * FROM tb_jadwal_kajian WHERE id='$id'")->result();
    }

    
}