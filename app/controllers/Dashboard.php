<?php

class Dashboard extends Controller{
    public function index(){
        // cek kalau user bukan pengelola
        if( $_SESSION['role'] != 'pengelola') {
            header("location:".BASEURL."/Home");
            exit;
        }

        $data['judul'] = "Dashboard";
        $data['penngelola'] = $this->model('PengelolaLapanganFutsal')->getPenyediaById($_SESSION['id']);
        $data['lapangan'] = $this->model('LapanganFutsal')->getAllLapanganById($_SESSION['id']);
        // var_dump($data);
        $this->view('templates/header',$data);
        $this->view('dashboard/index',$data);
        $this->view('templates/footer');
    }
}
