<?php

class Login extends Controller{

    public function index(){
        $this->view('login/index');
    }

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // var_dump($username);
        // var_dump($password);
        $data = $this->model('Aktor')->validasi($username, $password);
        // var_dump($data);

        if($data == '' || $data == null){
            Flasher::setFlash('Gagal', 'Username atau Password salah', 'danger');
            header("location:".BASEURL."/Login");
            exit;
        }

        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        Flasher::setFlash('Berhasil', 'Login berhasil', 'success');
        if($data['nama_penyedia'] != null){
            $_SESSION['nama_penyedia'] = $data['nama_penyedia'];
            $_SESSION['id_pengelola'] = $data['id_pengelola'];
            $_SESSION['role'] = 'pengelola';
            header("location:".BASEURL."/Dashboard");
            exit;
        } else {
            $_SESSION['role'] = 'pemesan';
            header("location:".BASEURL."/Home");
            exit;
        }
    }
}
