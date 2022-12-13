<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-'. $_SESSION['flash']['tipe'] .' alert-dismissible fade show" role="alert">
                    <strong>'. $_SESSION['flash']['pesan'] .'</strong> '. $_SESSION['flash']['aksi'] .'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
<<<<<<< HEAD
            unset($_SESSION['flash']);
=======
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
        }
    }
}