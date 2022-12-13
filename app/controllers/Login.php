<?php

class Login extends Controller{

    public function index(){
        $this->view('login/index');
    }

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        var_dump($username);
        var_dump($password);
        $data = $this->model('Aktor')->validasi($username, $password);

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
            $_SESSION['role'] = 'penyedia';
            header("location:".BASEURL."/Penyedia");
            exit;
        } else {
            $_SESSION['role'] = 'pemesan';
            header("location:".BASEURL."/Home");
            exit;
        }
    }
}
