<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <title> <?= $data['judul']; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #0086CF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL; ?>">
        <img class="img-fluid " src="<?= BASEURL; ?>/img/layout/sprout.png" alt="" width="35">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="<?= BASEURL; ?> ">Beranda</a>
        </li>
      </ul>
    </div>
  </div>
</nav>