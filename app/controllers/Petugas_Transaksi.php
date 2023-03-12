<?php
class Petugas_Transaksi extends Controller {
    public function index()
    {
        $data["Judul"] = "Transaksi";
           $data["transaksi"] = $this->model("Transaksi_model")->getAllTransaksi();
           $this->view("templates/header-petugas", $data);
           $this->view("templates/sidebar-petugas");
           $this->view("home/petugas/datatransaksi/index", $data);
           $this->view("templates/footer-petugas");
    }
}