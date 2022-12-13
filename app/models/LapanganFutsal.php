<<<<<<< HEAD
<?php

declare(strict_types=1);

class LapanganFutsal
{
    private $db;
    private $table = 'lapangan';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLapangan()
    {
        $this->db->query('SELECT * FROM lapangan');
        return $this->db->resultSet();
    }

    public function getAllLapanganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' where id_pengelola=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getLapanganById($id)
    {
        $this->db->query('SELECT * FROM lapangan l
        JOIN pengelola_lapangan_futsal p ON l.id_pengelola = p.id
        WHERE l.id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getJadwal($id, $tanggal)
    {
        $this->db->query('SELECT jam_mulai, jam_selesai FROM pesanan WHERE id_lapangan = :id AND tanggal = :tanggal');
        $this->db->bind('id', $id);
        $this->db->bind('tanggal', $tanggal);
        return $this->db->resultSet();
    }

}

=======
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
