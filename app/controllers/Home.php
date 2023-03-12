<?php 

class Home extends Controller {
    public function index()
    {
        $data['Judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('home/admin/index', $data);
        $this->view('templates/footer');
    }

    // public function admin()
    // {
    //     $data['Judul'] = 'Home';
    //     // $data['nama'] = $this->model('User_model')->getUser();
    //     $this->view('templates/header', $data);
    //     $this->view('templates/sidebar');
    //     $this->view('home/admin/index', $data);
    //     $this->view('templates/footer');
    // }

    public function petugas()
    {
        $data['Judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header-petugas', $data);
        $this->view('templates/sidebar-petugas');
        $this->view('home/petugas/index', $data);
        $this->view('templates/footer-petugas');
    }

    public function siswa()
    {
        $data['Judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header-siswa', $data);
        $this->view('templates/sidebar-siswa');
        $this->view('home/siswa/index', $data);
        $this->view('templates/footer-siswa');
    }
}