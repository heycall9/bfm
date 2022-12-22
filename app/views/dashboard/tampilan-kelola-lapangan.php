<?php Flasher::flash(); ?>
<div class="container my-sm-4 rounded-3 shadow border border-2 p-3" style="min-height: 75vh;">
    <div class="row">
        <h1 class="text-center">Data Lapangan</h1>
    </div>
    <?php if (empty($data['lapangan'])) : ?>
    <form action="<?= BASEURL ?>/DataLapanganFutsal/tambahLapangan" method="post">
    <?php else : ?>
    <form action="<?= BASEURL ?>/DataLapanganFutsal/editLapangan" method="post">
    <?php endif; ?>
        <div class="row my-5">
            <div class="col">
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label for="nama" class="form-label">Nama Lapangan</label>
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lapangan" value="<?= $data['lapangan']['nama'] ?? '' ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label for="harga" class="form-label">Harga Sewa</label>
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga sewa" value="<?= $data['lapangan']['harga'] ?? '' ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                        </div>
                        <div class="col">
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi lapangan"><?= $data['lapangan']['deskripsi']?? '' ?></textarea>
                        </div>
                    </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <img src="<?= BASEURL; ?>/img/layout/lapangan.png" alt="" class="card-img w-auto">
            </div>
        </div>
            <div class="d-flex justify-content-center">
                <input type="hidden" name="id_pengelola" value="<?= $_SESSION['id_pengelola'] ?>">
                <input type="hidden" name="foto" value="">
                <input type="hidden" name="id" value="<?= $data['lapangan']['id'] ?? '' ?>">
                <!-- <button type="submit" class="btn btn-primary mb-5">Upload Bukti Pembayaran</button> -->
                <input type="submit" class="btn btn-primary mb-5" value="Simpan lapangan" name="submit">
            </div>
    </form>
</div>
