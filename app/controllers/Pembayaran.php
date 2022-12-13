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
    public function getPesanan()
    {
        $idPesanan = $_POST["idPesanan"];
        $data["judul"] = "Invoice Pembayaran";
<<<<<<< HEAD
        $pesanan = $this->model("Pesanan")->getPesananById($idPesanan);
        $lapangan = $this->model("LapanganFutsal")->getLapanganById(
            $pesanan["id_lapangan"]
        );
        $data["harga"] =
            $lapangan["harga"] *
            ($pesanan["jam_selesai"] - $pesanan["jam_mulai"]);
        $data["idPesanan"] = $idPesanan;
=======
        $data["pesanan"] = $this->model("Pesanan")->getPesananById($idPesanan);
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
        $this->view("templates/header", $data);
        $this->view("pembayaran/invoice", $data);
        $this->view("templates/footer");
    }

    public function uploadBukti()
    {
<<<<<<< HEAD
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
=======
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
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
                    }
                }
<<<<<<< HEAD
            } else {
                $error =
                    "Maaf, hanya file JPG, JPEG, PNG, & GIF yang diizinkan.";
=======
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
            }
        }
<<<<<<< HEAD

        Flasher::setFlash("Gagal", $error, "danger");
        header("Location: " . BASEURL . "/Pembayaran/getPesanan/" . $idPesanan);
        exit;
=======
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
    }
}
