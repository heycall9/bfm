<?php


class Aktor
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * validasi login
     *
     * @param string $username username
     * @param string $password password
     *
     * @return array data aktor
     */
    public function validasi($username, $password)
    {
        $this->db->query('SELECT a.id, a.nama, a.username, p.nama_penyedia
            FROM aktor a 
            LEFT JOIN pengelola_lapangan_futsal p ON a.id = p.id_aktor
            WHERE a.username = :username AND a.password = :password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->single();
    }

    /**
     * register aktor
     *
     * @param string $data string data aktor
     *
     * @return int jumlah baris yang terpengaruh
     */
    public function register($data)
    {
        $this->db->query('INSERT INTO aktor (nama, username, password, alamat, usia, jenis_kelamin) VALUES (
            :nama, :username, :password, :alamat, :usia, :jenis_kelamin)');
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('usia', $data['usia']); 
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
