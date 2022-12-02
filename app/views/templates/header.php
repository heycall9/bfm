<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <title> <?= $data['judul']; ?></title>
</head>
<body>
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