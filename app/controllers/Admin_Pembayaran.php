<?php 

class Admin_Pembayaran extends Controller {
    public function index()
    {
        $data["Judul"] = "Pembayaran";
           $data["pembayaran"] = $this->model("Pembayaran_model")->getAllPembayaran();
           $this->view("templates/header", $data);
           $this->view("templates/sidebar");
           $this->view("home/admin/datapembayaran/index", $data);
           $this->view("templates/footer");
    }

    public function store()
    {
        if( $this->model('Pembayaran_model')->tambahDataPembayaran($_POST) > 0 ) {
            header('Location: ' . BASE_URL . 'admin_pembayaran');
            exit;
       }else {
        echo('Gagal');
       }
    }

    public function edit($id)
    {
        $data["Judul"] = "Pembayaran";
           $data["pembayaran"] = $this->model("Pembayaran_model")->getPembayaranById($id);
           $this->view("templates/header", $data);
           $this->view("templates/sidebar");
           $this->view("home/admin/datapembayaran/editpembayaran", $data);
           $this->view("templates/footer");
    }

    public function update($id)
    {
       if( $this->model('Pembayaran_model')->editDataPembayaran($_POST)) {
        header('Location: ' . BASE_URL . 'admin_pembayaran');
        exit;
       }
    }

    public function delete($id)
    {
        if( $this->model('Pembayaran_model')->hapusDataPembayaran($id) > 0 ) {
            header('Location: ' . BASE_URL . 'admin_pembayaran');
            exit;
       }else {
        echo('Gagal');
       }
    }
}