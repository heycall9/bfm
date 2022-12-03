<?php

class Pembayaran extends Controller
{
    public function index()
    {
        $data["judul"] = "Pembayaran";
        $this->view("templates/header", $data);
        $this->view("pembayaran/index");
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
        $data["pesanan"] = $this->model("Pesanan")->getPesananById($idPesanan);
        $this->view("templates/header", $data);
        $this->view("pembayaran/invoice", $data);
        $this->view("templates/footer");
    }

    public function uploadBukti()
    {
        $idPesanan = $_POST["idPesanan"];
        $data["judul"] = "Upload Bukti Pembayaran";
        $data["pesanan"] = $this->model("Pesanan")->getPesananById($idPesanan);
        if(isset($_POST["submit"]) && !empty($_FILES["bukti"]["name"])) {
            $targetDir = "img/bukti/";
            $fileName = $idPesanan . basename($_FILES["bukti"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if(in_array($fileType, $allowTypes)) 
            {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    $insert = $this->model("Pesanan")->setBukti($idPesanan, $fileName);
                    if($insert) {
                        Flasher::setFlash("Berhasil","Bukti pembayaran berhasil diupload", "success");
                        // TODO: redirect ke halaman mana?
                    } else {
                        Flasher::setFlash("Gagal","Bukti pembayaran gagal diupload", "danger");
                    }
                }
            }
        }
    }
}
