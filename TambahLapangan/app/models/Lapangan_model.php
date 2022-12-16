<?php

class Lapangan_model{

    private $table = 'lapangan';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllLapangan(){
        $this->db->query('SELECT * FROM lapangan ');
        return $this->db->resultSet();
    }

    public function getLapanagnById($id){
        $this->db->query('SELECT * FROM lapangan WHERE id = :id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataLapangan($data){
        $query = "INSERT INTO lapangan VALUES (NULL, :nama, :harga, :deskripsi, '')";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('deskripsi', $data['deskripsi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}