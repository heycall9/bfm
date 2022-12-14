<?php

class KelolaLapangan extends Controller{
    public function index(){
        $data['judul'] = "Daftar Penyedia";
        $data['penyedia'] = $this->model('PengelolaLapanganFutsal')->getAllpenyedia();        
        $this->view('templates/header',$data);
        $this->view('daftar-penyedia/index',$data);
        $this->view('templates/footer');
    }

    public function daftarLapangan($id = null){
        $data['judul'] = "Daftar Lapangan";
        if($id == null){
            $data['lapangan'] = $this->model('LapanganFutsal')->getAllLapangan();
        } else {
            $data['lapangan'] = $this->model('LapanganFutsal')->getAllLapanganById($id);
        }
        // var_dump($data);
        $this->view('templates/header',$data);
        $this->view('daftar-penyedia/daftarLapangan',$data);
        $this->view('templates/footer');
    }
}
