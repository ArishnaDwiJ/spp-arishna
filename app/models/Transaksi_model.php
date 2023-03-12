<?php

class Transaksi_model
{
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTransaksi()
    {
        $this->db->query('SELECT * FROM ' .  $this->table);
        return $this->db->resultAll();
    }

    public function getTransaksiByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username");
        $this->db->bind("username", $data);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function authTransaksiByUsername($data)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username AND password = :password");
        // $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}