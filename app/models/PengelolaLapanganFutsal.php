<?php


class PengelolaLapanganFutsal
{
    private $table = 'pengelola_lapangan_futsal';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllpenyedia()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getpenyediaById($id)
    {
        $this->db->query('SELECT * FROM aktor a 
            JOIN pengelola_lapangan_futsal p ON a.id = p.id_aktor
            WHERE a.id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}

