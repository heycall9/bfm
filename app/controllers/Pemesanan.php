<?php

class Pemesanan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pemesanan';
        $this->view('templates/header', $data);
        $this->view('pemesanan/index');
        $this->view('templates/footer');
    }

    public function tampilanPemesanan($id)
    {
        $booking = array_slice(array_keys($_POST), 0, -1);
        function is_sequence($array)
        {
            return $array === range($array[0], $array[count($array) - 1]);
        }
        if (! is_sequence($booking)) {
            Flasher::setFlash('Gagal', 'Mohon pilih jadwal yang berurutan', 'danger');
            header('Location: '.BASEURL.'/DataLapanganFutsal/detailJadwal/'.$id.'/'.$_POST['tanggal']);
        }
        // echo var_dump($booking).'<br>';
        // echo var_dump($_POST).'<br>';
        $data['judul'] = 'Pemesanan';
        $data['lapangan'] = $this->model('LapanganFutsal')->getLapanganById($id);
        $data['booking'] = $booking;
        $data['tanggal'] = $_POST['tanggal'];
        $data['jam'] = $booking[0].':00 - '.$booking[count($booking) - 1].':59';
        $data['jam_mulai'] = $booking[0];
        $data['jam_selesai'] = $booking[count($booking) - 1] + 1;
        // $data['pemesan'] = $this->model('Pemesan')->getPemesanById($_SESSION['id']);
        $data['pemesan'] = $this->model('Pemesan')->getPemesanById(1);
        // echo var_dump($data);
        $this->view('templates/header', $data);
        $this->view('pemesanan/index', $data);
        $this->view('templates/footer');
    }

    public function buatPesanan()
    {
        $idPesanan = $this->model('Pesanan')->tambahDataPesanan();
        if ($idPesanan > 0) {
            Flasher::setFlash('Berhasil', 'Pesanan berhasil ditambahkan. Lanjutkan Pembayaran.', 'success');
            header('Location: '.BASEURL.'/Pembayaran/getPesanan/'.$idPesanan);
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Pesanan gagal ditambahkan', 'danger');
        }
    }

    public function daftarPesanan()
    {
        $data['judul'] = 'Daftar Pesanan';
        $data['pesanan'] = $this->model('Pesanan')->daftarPesananByIdPengelola($_SESSION['id_pengelola']);
        $this->view('templates/header', $data);
        $this->view('dashboard/tampilan-mengelola-pesanan', $data);
        $this->view('templates/footer');
    }

    public function kelolaPesanan($id)
    {
        $data['judul'] = 'Detail Pesanan';
        $data['pesanan'] = $this->model('Pesanan')->getPesananById($id);
        // $data['lapangan'] = $this->model('LapanganFutsal')->getLapanganById($data['pesanan']['id_lapangan']);
        // $data['pemesan'] = $this->model('Pemesan')->getPemesanById($data['pesanan']['id_pemesan']);
        // var_dump($data);
        $this->view('templates/header', $data);
        $this->view('dashboard/tampilan-detail-pesanan', $data);
        $this->view('templates/footer');
    }

    public function acceptPesanan($id)
    {
        if ($this->model('Pesanan')->acceptPesanan($id) > 0) {
            Flasher::setFlash('Berhasil', 'Pesanan berhasil diterima', 'success');
            header('Location: '.BASEURL.'/Pemesanan/kelolaPesanan/'.$id);
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Pesanan gagal diterima', 'danger');
        }
    }
}
