<?php

declare(strict_types=1);

class LapanganFutsal
{
    private $db;
    private $table = "lapangan";

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllLapangan()
    {
        $this->db->query("SELECT * FROM lapangan");
        return $this->db->resultSet();
    }

    public function getLapanganById($id)
    {
        $this->db->query('SELECT *, l.id as id, p.id as pid FROM lapangan l
        JOIN pengelola_lapangan_futsal p ON l.id_pengelola = p.id
        WHERE l.id = :id');
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function getJadwal($id, $tanggal)
    {
        $this->db->query(
            "SELECT jam_mulai, jam_selesai FROM pesanan WHERE id_lapangan = :id AND tanggal = :tanggal"
        );
        $this->db->bind("id", $id);
        $this->db->bind("tanggal", $tanggal);
        return $this->db->resultSet();
    }

    public function getAllLapanganById($id)
    {
        $this->db->query(
            "SELECT *, l.id as id, p.id as pid FROM lapangan l 
            LEFT JOIN pengelola_lapangan_futsal p ON l.id_pengelola = p.id
            WHERE p.id_aktor = :id"
        );
        $this->db->bind("id", $id);
        return $this->db->resultSet();
    }

    public function insert($data)
    {
        $this->db->query(
            "INSERT INTO " .
                $this->table .
                " (id_pengelola, nama, harga, foto, deskripsi) VALUES (:id_pengelola, :nama, :harga, :foto, :deskripsi)"
        );
        $this->db->bind("id_pengelola", $data['id_pengelola']);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("harga", $data['harga']);
        $this->db->bind("foto", $data['foto']);
        $this->db->bind("deskripsi", $data['deskripsi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // delete
    public function delete($id)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id = :id");
        $this->db->bind("id", $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    //update 
    public function update($data)
    {
        $this->db->query(
            "UPDATE lapangan SET nama = :nama, harga = :harga, foto = :foto, deskripsi = :deskripsi WHERE id = :id"
        );
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("harga", $data['harga']);
        $this->db->bind("foto", $data['foto']);
        $this->db->bind("deskripsi", $data['deskripsi']);
        $this->db->bind("id", $data['id']);
        $this->db->execute();
        // return $this->db->rowCount();
        // return error
        return $this->db->error();
        // return $data;
    }

}
