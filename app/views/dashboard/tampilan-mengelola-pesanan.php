<?php Flasher::flash(); ?>
<div class="container my-sm-4 rounded-3 shadow border border-2 p-3" style="min-height: 75vh;">
    <div class="row">
        <div class="col">
            <h1>List Pesanan</h1>
        </div>
    </div>
    <div class="row">
        <!-- make table with column: id pesanan, nama pemesan, nama lapangan, tanggal, jam mulai, jam selesai, cek -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID Pesanan</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Nama Lapangan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jam Mulai</th>
                    <th scope="col">Jam Selesai</th>
                    <th scope="col">status</th>
                    <th scope="col">Cek</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['pesanan'] as $pesanan) : ?>
                    <tr>
                        <th scope="row"><?= $pesanan['id_pesanan']; ?></th>
                        <td><?= $pesanan['nama_aktor']; ?></td>
                        <td><?= $pesanan['nama_lapangan']; ?></td>
                        <td><?= $pesanan['tanggal']; ?></td>
                        <td><?= $pesanan['jam_mulai']; ?></td>
                        <td><?= $pesanan['jam_selesai']; ?></td>
                        <?php if ($pesanan['terkonfirmasi'] == 1) : ?>
                            <td>terkonfirmasi</td>
                        <?php else : ?>
                            <td>belum terkonfirmasi</td>
                        <?php endif; ?>
                        <td>
                            <a href="<?= BASEURL; ?>/Pemesanan/kelolaPesanan/<?= $pesanan['id_pesanan']; ?>" class="btn btn-success">Cek</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
