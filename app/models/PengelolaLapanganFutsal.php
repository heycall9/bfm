<?php 

    class PengelolaLapanganFutsal
    {
    private $table = 'pengelola_lapangan_futsal';
    private $db;

        public function __construct()
        {
        $this->db = new Database;
        }
        public function getAllpenyedia(){
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }
    }