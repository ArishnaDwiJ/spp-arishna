<?php 

class Admin_Pengguna extends Controller {
    public function index()
    {
        $data["Judul"] = "Pengguna";
           $data["pengguna"] = $this->model("Pengguna_model")->getAllPengguna();
           $this->view("templates/header", $data);
           $this->view("templates/sidebar");
           $this->view("home/admin/datapengguna/index", $data);
           $this->view("templates/footer");
    }

    public function store()
    {
        if($this->model('Pengguna_model')->tambahDataPengguna($_POST) > 0)
        {
            header('Location: ' . BASE_URL . 'admin_pengguna');
            exit;
        }
    }

    public function edit($id)
    {
        $data["Judul"] = "Pengguna";
           $data["pengguna"] = $this->model("Pengguna_model")->getPenggunaById($id);
           $this->view("templates/header", $data);
           $this->view("templates/sidebar");
           $this->view("home/admin/datapengguna/editpengguna", $data);
           $this->view("templates/footer");
    }

    public function update($id)
    {
       if( $this->model('Pengguna_model')->editDataPengguna($_POST)) {
        header('Location: ' . BASE_URL . 'admin_pengguna');
        exit;
       }
    }

    public function delete($id)
    {
        if( $this->model('Pengguna_model')->hapusDataPengguna($id) > 0 ) {
            header('Location: ' . BASE_URL . 'admin_pengguna');
            exit;
       }else {
        echo('Gagal');
       }
    }
}