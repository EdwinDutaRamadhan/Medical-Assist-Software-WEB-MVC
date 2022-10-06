<?php

class Data_models{
    private $db;
    private $table = 'tbl_mahasiswa';
    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query("SELECT * FROM tbl_mahasiswa");
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query("SELECT * FROM tbl_mahasiswa WHERE id = :id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    
}