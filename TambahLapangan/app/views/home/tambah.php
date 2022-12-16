<div class="container text-center mt-5">
    <div class="card">
        <div class="card-body">
            <form action="<?= BASEURL?>/home/tambah/" method="post">

            <div class="container mt-5 mb-5 ml-5 mr-5">
            <p class="text-center fs-1">Data Lapangan</p>
            <div class="row">
  <div class="col">
  <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="harga" name="harga">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="deskripsi" name="deskripsi">
    </div>
  </div>

  </div>
  <div class="col">
  <button type="button" class="btn btn-primary w-75 mh-75 p-3" style="width: 100px; height: 200px;">+ Foto Lapangan Futsal</button>
  </div>
</div>
            </div>
            <button type="submit" class="btn btn-primary" >Simpan</button>
</form>
        </div>
    </div>
</div>

