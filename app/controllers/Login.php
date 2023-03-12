<?php
    class Login extends Controller
    {
        public function index()
        {
            if(isset($_SESSION['pengguna']))
            {
                header('Location: ' . BASE_URL);
                exit;
            }
            $this->view('auth/login');
        }

        public function prosesLogin()
    //     {
    //         $dataUser = null;

    //         if (!$dataUser = $this->model('Siswa_model')->getSiswa($_POST['username'], $_POST['password'])) {
    //             if (!$dataUser = $this->model('Petugas_model')->getPetugas($_POST['username'], $_POST['password'])){
    //             // Flasher::setFlash('danger', 'Akun Tidak Terdaftar!');
    //             // header('Location: ' . BASE_URL . 'auth/login');
    //             }
    //         }
            
    //         $_SESSION['username'] = $dataUser['username'];
    //         $_SESSION['is_login'] = true;
    
    //         if ($dataUser['role'] == 'admin') {
    //             $_SESSION['role'] = 'admin';
    //             $_SESSION['id'] = $dataUser['id'];
    //             header('Location: ' . BASE_URL . 'home/admin');
    //         } else if ($dataUser['role'] == 'petugas') {
    //             $_SESSION['role'] = 'petugas';
    //             $_SESSION['id'] = $dataUser['id'];
    //             header('Location: ' . BASE_URL . 'home/petugas');
    //         } else {
    //             $_SESSION['role'] = 'siswa';
    //             $_SESSION['id'] = $dataUser['id'];
    //             header('Location: ' . BASE_URL . 'home/siswa');
    //         }
    //     }
    // }


    {
            $pengguna =
             $this->model('Pengguna_model')->getpenggunaByUsername($_POST['username']);
            if($this->model('Pengguna_model')->authpenggunaByUsername($_POST) > 0)   {

                if($pengguna['role'] == 'admin'){
                    header('Location: ' . BASE_URL . 'home/admin');
            }
                else if($pengguna['role'] =='petugas') {
                    header('Location: ' . BASE_URL . 'home/petugas');
            } 
                else if($pengguna['role'] =='siswa') {
                    header('Location: ' . BASE_URL . 'home/siswa');
            } 
        }

        else if($this->model('Siswa_model')->authSiswaByUsername($_POST) > 0) {
            $siswa = $this->model('Siswa_model')->getSiswaByUsername($_POST['username']);
            header('Location: ' . BASE_URL . 'home/siswa');
        }
    }
}