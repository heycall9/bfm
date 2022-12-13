<?php

class Register extends Controller{
    public function index(){

        $this->view('register/index');

    }

    public function register(){
        
        $data = $this->model('aktor')->register($_POST);
        if($data == 1){
            Flasher::setFlash('Berhasil', 'Register Berhasil', 'success');
            header("location:".BASEURL."/Login");
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Register Gagal', 'danger');
            header("location:".BASEURL."/Register");
            exit;
        }
    }
}
