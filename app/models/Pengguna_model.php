<?php

class Pengguna_model
{
    private $table = 'pengguna';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengguna()
    {
        $this->db->query('SELECT * FROM ' .  $this->table);
        return $this->db->resultAll();
    }

    public function getPengguna($username, $password)
    {
        $this->db->query("SELECT * FROM getpengguna WHERE username = :username AND password = :password");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->resultSingle();
    }

    public function getPenggunaById($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function getPenggunaByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username =:username");
        $this->db->bind("username", $username);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function authPenggunaByUsername($data)
    {
        $this->db->query("SELECT* FROM {$this->table} WHERE username =:username AND password=:password");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataPengguna($data)
    {
            $query = 'CALL INSERT_PENGGUNA(:username, :password, :role)';
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);
            $this->db->bind('role', $data['role']);

            return $this->db->rowCount();
    }

    public function editDataPengguna($data)
    {
        $query ='CALL UPDATE_PENGGUNA(:id, :username, :password, :role)';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);        
        $this->db->bind('username', $data['username']);        
        $this->db->bind('password', $data['password']);     
        $this->db->bind('role', $data['role']);     

        return $this->db->rowCount();
    }

    public function hapusDataPengguna($id)
    {
        $query = 'CALL DELETE_PENGGUNA(:id)';
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->rowCount();
    }
}