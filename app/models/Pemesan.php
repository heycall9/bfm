<?php 

    class Pemesan
    {
    private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getPemesanById($id)
        {
            $this->db->query("SELECT * FROM pemesan p 
                INNER JOIN aktor a ON p.id_aktor = a.id
                WHERE p.id_aktor = :id");
            $this->db->bind('id', $id);
            return $this->db->single();
        }
    }
