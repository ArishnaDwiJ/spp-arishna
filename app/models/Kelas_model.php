<?php

class Kelas_model
{
    private $table = 'kelas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKelas()
    {
        $this->db->query('SELECT * FROM ' .  $this->table);
        return $this->db->resultAll();
    }

    public function getKelasById($id)
    {
        $query = "SELECT * FROM " . $this->table  . " WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->resultSingle();
    }

    public function getKelasByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username");
        $this->db->bind("username", $data);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function authKelasByUsername($data)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username AND password = :password");
        // $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataKelas($data)
    {
        // var_dump($data); die;
            $query = 'CALL INSERT_KELAS(:nama, :kompetensi_keahlian)';
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('kompetensi_keahlian', $data['kompetensi_keahlian']);
            return $this->db->rowCount();
    }

    public function editDataKelas($data)
    {
        $query ='CALL UPDATE_KELAS(:id, :nama, :kompetensi_keahlian)';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);        
        $this->db->bind('nama', $data['nama']);        
        $this->db->bind('kompetensi_keahlian', $data['kompetensi_keahlian']);     
        return $this->db->rowCount();
    }

    public function hapusDataKelas($id)
    {
        $query = 'CALL DELETE_KELAS(:id)';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->rowCount();
    }  
}