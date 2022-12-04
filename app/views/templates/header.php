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
    <nav class="navbar navbar-expand-lg shadow" style="background-color: #0086CF ;" >
        <div class="container" >
        <a class="navbar-brand" href="#">
      <img src="<?= BASEURL; ?>/img/vector_logo.png" alt="" width="30" height="27">
    </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL; ?>">Beranda</a>
                </li>                            
            </ul>
           
                <a class="nav-link active text-white ms-auto" aria-current="page" href="<?= BASEURL; ?>">
            
                    <img src="<?= BASEURL; ?>/img/vector_person.png" alt="" width="27" height="24">
            </a>
            </div>
        </div>
    </nav>
