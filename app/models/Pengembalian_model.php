<?php

class Pengembalian_model {
    private $table = '2511500086pengembalian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengembalian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPengembalianById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kd_kembali086 = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPengembalian($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                  VALUES (:kd_kembali086, :nimmhs086, :nmmhs086, :nmbuku086, :jumbuku086, :tglkembali086, :denda086)";
        
        $this->db->query($query);
        $this->db->bind('kd_kembali086', $data['kd_kembali086']);
        $this->db->bind('nimmhs086', $data['nimmhs086']);
        $this->db->bind('nmmhs086', $data['nmmhs086']);
        $this->db->bind('nmbuku086', $data['nmbuku086']);
        $this->db->bind('jumbuku086', $data['jumbuku086']);
        $this->db->bind('tglkembali086', $data['tglkembali086']);
        $this->db->bind('denda086', $data['denda086']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPengembalian($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE kd_kembali086 = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
