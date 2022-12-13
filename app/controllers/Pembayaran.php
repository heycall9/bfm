<?php

class Pembayaran extends Controller
{
    public function index($idPesanan)
    {
        $data["judul"] = "Pembayaran";
        $data["idPesanan"] = $idPesanan;
        $data["pesanan"] = $this->model("Pesanan")->getPesananById($idPesanan);
        $this->view("templates/header", $data);
        $this->view("pembayaran/index", $data);
        $this->view("templates/footer");
    }

    /**
     * Menampilkan invoice pembayaran
     *
     *
     * @return void
     */
    public function getPesanan($idPesanan)
    {
        $data["judul"] = "Invoice Pembayaran";
        $pesanan = $this->model("Pesanan")->getPesananById($idPesanan);
        $lapangan = $this->model("LapanganFutsal")->getLapanganById(
            $pesanan["id_lapangan"]
        );
        $data["harga"] =
            $lapangan["harga"] *
            ($pesanan["jam_selesai"] - $pesanan["jam_mulai"]);
        $data["idPesanan"] = $idPesanan;
        $this->view("templates/header", $data);
        $this->view("pembayaran/index", $data);
        $this->view("templates/footer");
    }

    public function uploadBukti()
    {
        echo var_dump($_FILES) . "<br>";
        echo var_dump($_POST);

        $idPesanan = $_POST["idPesanan"];
        $data["judul"] = "Upload Bukti Pembayaran";
        $data["pesanan"] = $this->model("Pesanan")->getPesananById($idPesanan);
        if (isset($_POST["submit"]) && !empty($_FILES["fileBukti"]["name"])) {
            $targetDir = "/opt/lampp/htdocs/bfm/app/bukti/";
            $fileName = $idPesanan . basename($_FILES["fileBukti"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            if (getimagesize($_FILES["fileBukti"]["tmp_name"])) {
                if (
                    move_uploaded_file(
                        $_FILES["fileBukti"]["tmp_name"],
                        $targetFilePath
                    )
                ) {
                    $insert = $this->model("Pesanan")->setBukti(
                        $idPesanan,
                        $fileName
                    );
                    if ($insert) {
                        Flasher::setFlash(
                            "Berhasil",
                            "Bukti pembayaran berhasil diupload",
                            "success"
                        );
                        header(
                            "Location: " .
                                BASEURL .
                                "/Pembayaran/getPesanan/" .
                                $idPesanan
                        );
                        exit();
                    }
                } else {
                    $error = "Maaf, terjadi kesalahan saat mengupload file.";
                }
            } else {
                $error =
                    "Maaf, hanya file JPG, JPEG, PNG, & GIF yang diizinkan.";
            }
        } else {
            $error = "Harap pilih file untuk diupload.";
        }

        Flasher::setFlash("Gagal", $error, "danger");
        header("Location: " . BASEURL . "/Pembayaran/getPesanan/" . $idPesanan);
        exit;
    }
}
