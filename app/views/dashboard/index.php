<?php Flasher::flash(); ?>
<div class="container my-sm-4 rounded-3 shadow border border-2 p-3" style="min-height: 75vh;">
    <div class="row">
        <div class="col">
            <h1>List Lapangan</h1>
        </div>
        <div class="col-sm-3">
            <a href="<?= BASEURL; ?>/DataLapanganFutsal/formTambahLapangan" class="btn btn-primary">Tambah Lapangan</a>
        </div>
    </div>
    <div class="row">
        <!-- make table with 3 column (no, nama lapangan, action) -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lapangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['lapangan'] as $lapangan) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $lapangan['nama']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/DataLapanganFutsal/formEditLapangan/<?= $lapangan['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASEURL; ?>/DataLapanganFutsal/deleteLapangan/<?= $lapangan['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus lapangan ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
