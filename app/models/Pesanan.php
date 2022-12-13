<?php

declare(strict_types=1);

class Pesanan
{
    private $db;

    /**
     * @param null
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * return data pesanan
     *
     * @return array
     */
    public function getPesananById($idPesanan)
    {
<<<<<<< HEAD
        $this->db->query("SELECT * FROM pesanan WHERE id = :idPesanan");
        $this->db->bind("idPesanan", $idPesanan);
=======
        $this->db->query('SELECT * FROM pesanan WHERE id_pesanan = :idPesanan');
        $this->db->bind('idPesanan', $idPesanan);
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
        return $this->db->single();
    }

    /**
     * menyimpan bukti pembayaran
     *
     * @return void
     */
    public function setBukti($idPesanan, $bukti)
    {
<<<<<<< HEAD
        $this->db->query(
            "UPDATE pesanan SET bukti = :bukti WHERE id = :idPesanan"
        );
        $this->db->bind("idPesanan", $idPesanan);
        $this->db->bind("bukti", $bukti);
=======
        $this->db->query('UPDATE pesanan SET bukti_pembayaran = :bukti WHERE id_pesanan = :idPesanan');
        $this->db->bind('idPesanan', $idPesanan);
        $this->db->bind('bukti', $bukti);
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataPesanan()
    {
        // var_dump($_POST);

        if($_POST){
            $query =
                "INSERT INTO pesanan VALUES (NULL, :id_pemesan, :id_lapangan, :tanggal, :jam_mulai, :jam_selesai, '')";
            $this->db->query($query);
            $this->db->bind("id_pemesan", $_POST['id_pemesan']);
            $this->db->bind("id_lapangan", $_POST['id_lapangan']);
            $this->db->bind("tanggal", $_POST['tanggal']);
            $this->db->bind("jam_mulai", $_POST['jam_mulai']);
            $this->db->bind("jam_selesai", $_POST['jam_selesai']);
            $this->db->execute();
            // return $this->db->rowCount();
            // return id pesanan
            return $this->db->lastInsertId();
        }

    }
}
