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

    public function formTambahLapangan()
    {
        $data['judul'] = 'Tambah Lapangan Futsal';
        $this->view('templates/header', $data);
        $this->view('dashboard/tampilan-kelola-lapangan', $data);
        $this->view('templates/footer');
    }

    public function tambahLapangan()
    {
        if ($this->model('LapanganFutsal')->insert($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Lapangan berhasil ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Dashboard');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Lapangan gagal ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/DataLapanganFutsal/formTambahLapangan');
            exit;
        }
    }

    public function formEditLapangan($id)
    {
        $data['judul'] = 'Edit Lapangan Futsal';
        $data['lapangan'] = $this->model('LapanganFutsal')->getLapanganById($id);
        // var_dump($data['lapangan']);
        $this->view('templates/header', $data);
        $this->view('dashboard/tampilan-kelola-lapangan', $data);
        $this->view('templates/footer');
    }

    public function editLapangan()
    {
        // var_dump($_POST);
        // var_dump($this->model('LapanganFutsal')->update($_POST));
        if ($this->model('LapanganFutsal')->update($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Lapangan berhasil diubah', 'success');
            header('Location: ' . BASEURL . '/Dashboard');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Lapangan gagal diubah', 'danger');
            header('Location: ' . BASEURL . '/DataLapanganFutsal/formEditLapangan/' . $_POST['id']);
            exit;
        }
    }

    public function deleteLapangan($id)
    {
        if ($this->model('LapanganFutsal')->delete($id) > 0) {
            Flasher::setFlash('Berhasil', 'Lapangan berhasil dihapus', 'success');
            header('Location: ' . BASEURL . '/Dashboard');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Lapangan gagal dihapus', 'danger');
            header('Location: ' . BASEURL . '/Dashboard');
            exit;
        }
    }

}
