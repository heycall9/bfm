<?php

class Dashboard extends Controller{
    public function index(){
        $data['judul'] = "Dashboard";
        $data['penngelola'] = $this->model('PengelolaLapanganFutsal')->getPenyediaById($_SESSION['id']);
        $data['lapangan'] = $this->model('LapanganFutsal')->getAllLapanganById($_SESSION['id']);
        $this->view('templates/header',$data);
        $this->view('dashboard/index',$data);
        $this->view('templates/footer');
    }
}
