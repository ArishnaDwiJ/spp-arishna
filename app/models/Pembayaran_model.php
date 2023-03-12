<?php

class Pembayaran_model
{
    private $table = 'pembayaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPembayaran()
    {
        $this->db->query('SELECT * FROM ' .  $this->table);
        return $this->db->resultAll();
    }

    public function getPembayaranById($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function getPembayaranByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username");
        $this->db->bind("username", $data);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function authPembayaranByUsername($data)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username AND password = :password");
        // $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataPembayaran($data)
    {
            $query = 'CALL INSERT_PEMBAYARAN(:tahun_ajaran, :nominal)';
            $this->db->query($query);
            $this->db->bind('tahun_ajaran', $data['tahun_ajaran']);
            $this->db->bind('nominal', $data['nominal']);

            return $this->db->rowCount();
    }

    public function editDataPembayaran($data)
    {
        $query ='CALL UPDATE_PEMBAYARAN(:id, :tahun_ajaran, :nominal)';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);        
        $this->db->bind('tahun_ajaran', $data['tahun_ajaran']);        
        $this->db->bind('nominal', $data['nominal']);     

        return $this->db->rowCount();
    }

    public function hapusDataPembayaran($id)
    {
        $query = 'CALL DELETE_PEMBAYARAN(:id)';
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->rowCount();
    }
}