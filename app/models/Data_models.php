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

    public function getMahasiswaByNim($nim){
        $this->db->query("SELECT * FROM tbl_mahasiswa WHERE NIM = :NIM");
        $this->db->bind('NIM',$nim);
        return $this->db->single();
    }
    
    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO tbl_mahasiswa
                VALUES
                (:NIM, :Nama, :Vaksin1, :Vaksin2, :Vaksin3, :Vaksin4, :Vaksin5)";
        $this->db->query($query);
        $this->db->bind('NIM', $data['NIM']);                
        $this->db->bind('Nama', $data['Nama']);                
        $this->db->bind('Vaksin1', $data['Vaksin1']);                
        $this->db->bind('Vaksin2', $data['Vaksin2']);                
        $this->db->bind('Vaksin3', $data['Vaksin3']);                
        $this->db->bind('Vaksin4', $data['Vaksin4']);                
        $this->db->bind('Vaksin5', $data['Vaksin5']);                
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deleteDataMahasiswa($nim){
        $query = "DELETE FROM tbl_mahasiswa WHERE NIM = :NIM";
        $this->db->query($query);
        $this->db->bind('NIM',$nim);

        $this->db->execute();

        return $this->db->rowCount();
    }
}