<?php 

class Admin_Siswa extends Controller {
    public function index()
    {
            $data["Judul"] = "Siswa";
               $data["siswa"] = $this->model("Siswa_model")->getAllSiswa();
               $this->view("templates/header", $data);
               $this->view("templates/sidebar");
               $this->view("home/admin/datasiswa/index", $data);
               $this->view("templates/footer");
    }

    
    public function store()
    {
        if( $this->model('Siswa_model')->tambahDataSiswa($_POST) > 0 ) {
            header('Location: ' . BASE_URL . 'admin_siswa');
            exit;
       }else {
        echo('Gagal');
       }
    }
    
    public function edit($id)
    {
        $data["Judul"] = "Siswa";
           $data["siswa"] = $this->model("Siswa_model")->getSiswaById($id);
           $this->view("templates/header", $data);
           $this->view("templates/sidebar");
           $this->view("home/admin/datasiswa/editsiswa", $data);
           $this->view("templates/footer");
    }

    public function update($id)
    {
        $this->model('Siswa_model')->editDataSiswa($_POST);
        header('Location: ' . BASE_URL . 'admin_siswa');
    }

    public function delete($id)
    {
        if( $this->model('Siswa_model')->hapusDataSiswa($id) > 0 ) {
            header('Location: ' . BASE_URL . 'admin_siswa');
            exit;
       }else {
        echo('Gagal');
       }
    }
}