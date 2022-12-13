<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
<<<<<<< HEAD
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
=======
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
    <title> <?= $data['judul']; ?></title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>
<<<<<<< HEAD
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
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="<?= BASEURL;?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="<?= BASEURL;?>/KelolaLapangan">Daftar Lapangan</a>
        </li>
      </ul>
      <div class="d-flex justify-content-center align-items-center">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if(!$_SESSION) : ?>
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
=======
    <div class="text-center">
        <img src="<?= BASEURL; ?>/img/logo-header.png" alt="logo-header" width="180" height="70" class="mt-3 mb-3 text-center img-fluid">
    </div>
    <nav class="navbar navbar-expand-lg shadow" style="background-color: #FF8E0A ;" >
        <div class="container" >
            <a class="navbar-brand text-white" href="<?= BASEURL; ?>">HALOFILKOM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                </li>                            
                <li class="nav-item">
                <a class="nav-link active text-white" href="<?= BASEURL; ?>/createTicket">Create Ticket</a>            
                </li>
                <li class="nav-item">
                <a class="nav-link active text-white" href="<?= BASEURL; ?>/checkTicket">Check Ticket</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-white" href="<?= BASEURL; ?>/about">About Us</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
>>>>>>> 4c0a59e2b751617aa1676b45754a7af4f1baefb6
