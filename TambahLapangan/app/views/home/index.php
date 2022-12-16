<div class="container text-center mt-5">
<div class="card">
  <div class="card-body">
  <div class="container mt-5 mb-5 ml-5 mr-5">
<table class="table caption-top">
  <caption>List Lapangan</caption>
  <div class= "d-grid d-md-flex justify-content-md-end">
  <button class="btn btn-outline-primary me-2justify-content-md-end" type="button">
  <a  href="<?= BASEURL?>/home/tambahLapangan/">Tambah Lapangan +</a>
</button>
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['lapangan'] as $lapangan) :?>
    <tr>
      <th scope="row"><?= $lapangan['nama']?></th>
      <td><?= $lapangan['harga']?></td>
      <td><?= $lapangan['deskripsi']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
  </div>
</div>
  </div>

