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
     * Menampilkan detail lapangan futsal 
     *
     * @param int $id id lapangan futsal
     * @param string $tanggal tanggal yang dipilih
     *
     * TODO: implementasi di frontend
     * $data['lapangan']['jadwalBooked']: array yang berisi semua jam yang sudah di-book
     * $data['lapangan']['jadwalBuka']: array yang berisi semua jam buka
     *
     * cara implementasi
     * foreach($data['lapangan']['jadwalBuka'] as $jamBuka) {
     *    if(in_array($jamBuka, $data['lapangan']['jadwalBooked'])) {
     *    // tambilan jam yang sudah di-book
     *    } else {
     *    // tampilan jam yang belum di-book
     *    }
     * }
     *
     * catatan:
     * bingung buat nanti submit jadwal bookingnya gimana
     */
    public function detail($id, $tanggal = null)
    {
        $data['judul'] = 'Detail Lapangan Futsal';
        $data['lapangan'] = $this->model('LapanganFutsal')->getLapanganById($id);
        if($tanggal == null) {
            $data['lapangan']['tanggal'] = date('Y-m-d');
        } else {
            $data['lapangan']['tanggal'] = date('Y-m-d', strtotime($tanggal));
        }
        $jadwal = $this->model('LapanganFutsal')->getJadwal($id, $data['lapangan']['tanggal']);
        $jadwalBooked = [];
        foreach ($jadwal as $j) {
            $booked = range($j['jam_mulai'], $j['jam_selesai'] - 1);
            $jadwalBooked = array_merge($jadwalBooked, $booked);
        }
        $data['lapangan']['jadwalBooked'] = $jadwalBooked;
        $jadwalBuka = range($data['lapangan']['jam_buka'], $data['lapangan']['jam_tutup'] - 1);
        $data['lapangan']['jadwalBuka'] = $jadwalBuka;
        $this->view('templates/header', $data);
        $this->view('dataLapanganFutsal/detail', $data);
        $this->view('templates/footer');
    }
}
