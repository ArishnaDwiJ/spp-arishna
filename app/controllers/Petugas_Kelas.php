<?php 

class Petugas_Kelas extends Controller {
    public function index()
    {
            $data["Judul"] = "Kelas";
               $data["kelas"] = $this->model("Kelas_model")->getAllKelas();
               $this->view("templates/header-petugas", $data);
               $this->view("templates/sidebar-petugas");
               $this->view("home/petugas/datakelas/index", $data);
               $this->view("templates/footer-petugas");
    }

    public function store()
    {
        if( $this->model('Kelas_model')->tambahDataKelas($_POST) > 0 ) {
            header('Location: ' . BASE_URL . 'petugas_kelas');
            exit;
       }else {
        echo('Gagal');
       }
    }

    public function edit($id)
    {
        $data["Judul"] = "Kelas";
           $data["kelas"] = $this->model("Kelas_model")->getKelasById($id);
           $this->view("templates/header", $data);
           $this->view("templates/sidebar");
           $this->view("home/petugas/datakelas/editkelas", $data);
           $this->view("templates/footer");
    }

    public function update($id)
    {
        $this->model('Kelas_model')->editDataKelas($_POST);
        header('Location: ' . BASE_URL . 'petugas_kelas');
    }

    public function delete($id)
    {
        if( $this->model('Kelas_model')->hapusDataKelas($id) > 0 ) {
            header('Location: ' . BASE_URL . 'petugas_kelas');
            exit;
       }else {
        echo('Gagal');
       }
    }
}