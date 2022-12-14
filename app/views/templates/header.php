<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title> <?= $data['judul']; ?></title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #0086CF;">
  <div class="container-fluid mx-4">
    <a class="navbar-brand" href="<?= BASEURL;?>">
      <img class="img-fluid" src="<?= BASEURL; ?>/img/layout/sprout.png" alt="BFM" width="30">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if( array_key_exists('role', $_SESSION) && $_SESSION['role'] == 'pengelola') : ?>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="<?= BASEURL;?>/Dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="<?= BASEURL;?>/Pemesanan/daftarPesanan">Daftar Pesanan</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="<?= BASEURL;?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="<?= BASEURL;?>/KelolaLapangan">Daftar Lapangan</a>
        </li>
        <?php endif; ?>
      </ul>
      <div class="d-flex justify-content-center align-items-center">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if(!array_key_exists('id', $_SESSION)) : ?>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="<?= BASEURL;?>/Login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="<?= BASEURL;?>/Register">Register</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="<?= BASEURL;?>/Logout">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
      <a class="ms-2" role="button">
        <img class="" style="" src="<?= BASEURL; ?>/img/layout/akun.png" alt="">
      </a>
      </div>
    </div>
  </div>
</nav>

<!-- <?php var_dump($_SESSION); ?> -->
