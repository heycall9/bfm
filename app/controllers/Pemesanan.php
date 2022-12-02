<?php

class Pemesanan extends Controller{
    public function index(){
        $data['judul'] = 'Pemesanan';
        $this-> view('templates/header',$data);
        $this-> view('pemesanan/index');
        $this-> view('templates/footer');
    }
}