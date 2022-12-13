<?php

class DataLapanganFutsal extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Lapangan Futsal';
        $data['lapangan'] = $this->model('LapanganFutsal')->getAllLapangan();
        $this->view('templates/header', $data);
        $this->view('dataLapanganFutsal/index', $data);
        $this->view('templates/footer');
    }

    /**
     * Menampilkan detail jadwal lapangan futsal
     *
     * @param int $id id lapangan futsal
     * @param string $tanggal tanggal yang dipilih
     *
     */
    public function detailJadwal($id, $tanggal = null)
    {
        // *post dari form tanggal
        if ($_POST != null) {
            $tanggal = $_POST['tanggal'];
            header('Location: ' . BASEURL . '/DataLapanganFutsal/detailJadwal/' . $id . '/' . $tanggal);
        }

        $data['judul'] = 'Detail Lapangan Futsal';

        // get data lapangan
        $data['lapangan'] = $this->model('LapanganFutsal')->getLapanganById($id);

        // set tanggal default
        if ($tanggal == null || $tanggal == '') {
            $data['lapangan']['tanggal'] = date('Y-m-d');
        } else {
            $data['lapangan']['tanggal'] = date('Y-m-d', strtotime($tanggal));
        }

        // get data jadwal yang sudah di booking
        $jadwal = $this->model('LapanganFutsal')->getJadwal($id, $data['lapangan']['tanggal']);

        // mengubah format jadwal yang terbooking menjadi array
        $jadwalBooked = [];
        foreach ($jadwal as $j) {
            $booked = range($j['jam_mulai'], $j['jam_selesai'] - 1);
            $jadwalBooked = array_merge($jadwalBooked, $booked);
        }

        $data['lapangan']['jadwalBooked'] = $jadwalBooked;
        $data['lapangan']['jam_buka'] = 9;
        $data['lapangan']['jam_tutup'] = 21;
        $jadwalBuka = range($data['lapangan']['jam_buka'], $data['lapangan']['jam_tutup'] - 1);
        $data['lapangan']['jadwalBuka'] = $jadwalBuka;
        // var_dump($data['lapangan']);
        $this->view('templates/header', $data);
        $this->view('lapangan/jadwal', $data);
        $this->view('templates/footer');
    }
}
