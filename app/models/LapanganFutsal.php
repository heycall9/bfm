<?php 

class LapanganFutsal{
    private $db;

    private $table = 'lapangan';
    public function __construct()
    {
        $this->db = new Database;   
    }
    public function getAllLapanganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' where id_pengelola=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
}