<?php

class Petugas_model
{
    private $table = 'petugas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPetugas()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultAll();
    }

    public function getPetugas($username, $password)
    {
        $this->db->query("SELECT * FROM getpetugas WHERE username = :username AND password = :password");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->resultSingle();
    }

    public function getPetugasByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username =:username");
        $this->db->bind("username", $data);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function getPetugasById($id)
    {
        $query = "SELECT * FROM " . $this->table  . " WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->resultSingle();
    }

    public function authPetugasByUsername($data)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username =:username AND password=:password");
        // $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataPetugas($data)
    {
            $query = 'CALL INSERT_PETUGAS(:nama, :pengguna_id)';
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('pengguna_id', $data['pengguna_id']);

            return $this->db->rowCount();
    }

    public function editDataPetugas($data)
    {
        $query ='CALL UPDATE_PETUGAS(:id, :nama, :pengguna_id)';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);        
        $this->db->bind('nama', $data['nama']);        
        $this->db->bind('pengguna_id', $data['pengguna_id']);          

        return $this->db->rowCount();
    }

    public function hapusDataPetugas($id)
    {
        $query = 'CALL DELETE_PETUGAS(:id)';
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        return $this->db->rowCount();
    }  
}