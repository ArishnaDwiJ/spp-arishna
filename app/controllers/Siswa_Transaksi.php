<?php
   class Siswa_Transaksi extends Controller {
       public function index () 
       {
           $data["Judul"] = "Transaksi";
           $data["transaksi"] = $this->model("Transaksi_model")->getAllTransaksi();
           $this->view("templates/header-siswa", $data);
           $this->view("templates/sidebar-siswa");
           $this->view("home/siswa/datatransaksi/index", $data);
           $this->view("templates/footer-siswa");
       }
    }