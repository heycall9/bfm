<?php Flasher::flash(); ?>
<div class="container my-sm-4 rounded-3 shadow border border-2 p-3" style="min-height: 75vh;">
    <div class="row">
        <div class="col">
            <h1>Bukti</h1>
        </div>
    </div>
    <div class="row">
        <!-- if picture not avalable -->
        <?php if (empty($data['pesanan']['bukti'])) : ?>
            <div class="col">
                <h1 class="text-center">Pemesan belum mengupload bukti</h1>
            </div>
        <?php else : ?>
        <img src="<?= BASEURL; ?>/../app/bukti/<?= $data['pesanan']['bukti']; ?>" alt="bukti" class="img-fluid">
        <?php endif; ?>
    </div>
    <div class="row">
        <a href="<?= BASEURL; ?>/Pemesanan/acceptPesanan/<?= $data['pesanan']['id']; ?>" class="btn btn-success">Accept</a>
    </div>
</div>
