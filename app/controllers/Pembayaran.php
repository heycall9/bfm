<?php

class Pembayaran extends Controller{
    public function index(){
        $data['judul'] = 'Check Ticket';
        $this-> view('templates/header',$data);
        $this-> view('pembayaran/index');
        $this-> view('templates/footer');
    }
    
}