<?php
class Admin_Transaksi extends Controller {
    public function index()
    {
        $data["Judul"] = "Transaksi";
           $data["transaksi"] = $this->model("Transaksi_model")->getAllTransaksi();
           $this->view("templates/header", $data);
           $this->view("templates/sidebar");
           $this->view("home/admin/datatransaksi/index", $data);
           $this->view("templates/footer");
    }
}