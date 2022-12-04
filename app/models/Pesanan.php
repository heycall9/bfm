<?php

// declare(strict_types=1);

class Pesanan
{
    private $db;

    /**
     * @param null 
     */
    public function __construct()
    {
        $this->db = new Database;
    }
    
    /**
     * return data pesanan
     *
     * @return array
     */
    public function getPesananById($idPesanan)
    {
        $this->db->query('SELECT * FROM pesanan WHERE id = :idPesanan');
        $this->db->bind('idPesanan', $idPesanan);
        return $this->db->single();
    }

    /**
     * menyimpan bukti pembayaran
     *
     * @return void
     */
    public function setBukti($idPesanan, $bukti)
    {
        $this->db->query('UPDATE pesanan SET bukti = :bukti WHERE id = :idPesanan');
        $this->db->bind('idPesanan', $idPesanan);
        $this->db->bind('bukti', $bukti);
        $this->db->execute();
    }
}

