<?php

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['lapangan'] = $this->model('Lapangan_model')->getAllLapangan();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Lapangan';
        $data['lapangan'] = $this->model('Lapangan_model')->getTiketById($id);
        $this->view('templates/header', $data);
        $this->view('home/detail', $data);
        $this->view('templates/footer');
    }

    public function tambahLapangan()
    {
        $data['judul'] = 'Tambah Lapangan';
        $this->view('templates/header', $data);
        $this->view('home/tambah', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Lapangan_model')->tambahDataLapangan($_POST)>0){
            header('Location:' . BASEURL . '/home');
            exit;
        }
    }

}