<?php

class Pemesanan extends Controller{
    public function index(){
        $data['judul'] = 'Pemesanan';
        $this-> view('templates/header',$data);
        $this-> view('pemesanan/index');
        $this-> view('templates/footer');
    }

    public function pesan($id){
        $booking = array_slice(array_keys($_POST), 0, -1);
        function is_sequence($array) {
            return $array === range($array[0], $array[count($array)-1]);
        }
        if(!is_sequence($booking)){
            Flasher::setFlash('Gagal','Mohon pilih jadwal yang berurutan','danger');
            header('Location: '.BASEURL.'/DataLapanganFutsal/detailJadwal/'.$id);
        }
        // echo var_dump($booking).'<br>';
        // echo var_dump($_POST);
        $data['judul'] = 'Pemesanan';
        $data['lapangan'] = $this->model('LapanganFutsal')->getLapanganById($id);
        $data['booking'] = $booking;
        $data['tanggal'] = $_POST['tanggal'];
        $data['jam'] = $booking[0].':00 - '.$booking[count($booking)-1].':00';
        $this-> view('templates/header',$data);
        $this-> view('pemesanan/index', $data);
        $this-> view('templates/footer');
    }
}
