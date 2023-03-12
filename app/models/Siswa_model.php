<?php

class Siswa_model
{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query('SELECT * FROM ' .  $this->table);
        return $this->db->resultAll();
    }

    public function getSiswa($username, $password)
    {
        $this->db->query("SELECT * FROM getsiswa WHERE username = :username AND password = :password");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->resultSingle();
    }

    public function getSiswaById($id)
    {
        $query = "SELECT * FROM " . $this->table  . " WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->resultSingle();
    }

    public function getSiswaByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username");
        $this->db->bind("username", $data);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function authSiswaByUsername($data)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username AND password = :password");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataSiswa($data)
    {
        $query = "CALL INSERT_SISWA(:nisn, :nis, :nama, :alamat, :telepon, :kelas_id, :pengguna_id, :pembayaran_id)";
       
        $this->db->query($query);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('kelas_id', $data['kelas_id']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);

        return $this->db->rowCount();
    }

    public function editDataSiswa($data)
    {
        $query ="CALL UPDATE_SISWA(:id, :nisn, :nis, :nama, :alamat, :telepon, :kelas_id, :pengguna_id, :pembayaran_id)";
       
        $this->db->query($query);

        $this->db->bind('id', $data['id']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('kelas_id', $data['kelas_id']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);

        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id)
    {
        $query = "CALL DELETE_SISWA(:id)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        return $this->db->rowCount();
    } 
}