<?php 

class Admin_Petugas extends Controller {
    public function index()
    {
            $data["Judul"] = "Petugas";
               $data["petugas"] = $this->model("Petugas_model")->getAllPetugas();
               $this->view("templates/header", $data);
               $this->view("templates/sidebar");
               $this->view("home/admin/datapetugas/index", $data);
               $this->view("templates/footer");
    }

    public function store()
    {
        if( $this->model('Petugas_model')->tambahDataPetugas($_POST) > 0 ) {
            header('Location: ' . BASE_URL . 'admin_petugas');
            exit;
       }else {
        echo('Gagal');
       }
    }

    public function edit($id)
    {
        $data["Judul"] = "Petugas";
           $data["petugas"] = $this->model("Petugas_model")->getPetugasById($id);
           $this->view("templates/header", $data);
           $this->view("templates/sidebar");
           $this->view("home/admin/datapetugas/editpetugas", $data);
           $this->view("templates/footer");
    }

    public function update($id)
    {
        $this->model('Petugas_model')->editDataPetugas($_POST);
        header('Location: ' . BASE_URL . 'admin_petugas');
    }

    public function delete($id)
    {
        if( $this->model('Petugas_model')->hapusDataPetugas($id) > 0 ) {
            header('Location: ' . BASE_URL . 'admin_petugas');
            exit;
       }else {
        echo('Gagal');
       }
    }
}