<?php

declare(strict_types=1);

class LapanganFutsal
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLapangan()
    {
        $this->db->query('SELECT * FROM lapangan_futsal');
        return $this->db->resultSet();
    }

    public function getLapanganById($id)
    {
        $this->db->query('SELECT * FROM lapangan_futsal WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getJadwal($id, $tanggal)
    {
        $this->db->query('SELECT jam_mulai, jam_selesai FROM jadwal WHERE id_lapangan = :id AND tanggal = :tanggal');
        $this->db->bind('id', $id);
        $this->db->bind('tanggal', $tanggal);
        return $this->db->resultSet();
    }
}

