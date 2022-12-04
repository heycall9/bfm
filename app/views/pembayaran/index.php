<style>

    .paralax_pemesanan {


/* Set a specific height */
min-height: 300px;
background-color: white;
/* Create the parallax scrolling effect */
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
border-radius: 10px;

}

</style>
<?php Flasher::flash(); ?>
<div class="container-fluid" style="color:white ; background-image: url(<?= BASEURL ?>/img/background.png); background-size: cover;background-repeat: no-repeat; background-position: center; height: 90vh; width: 100%;">   
<div class="container">
    <div class="row ">
        
        <div class="paralax_pemesanan shadow-lg mt-4">
            <h1 class="text-center mt-3" style="color:black ;">Pembayaran</h1>
            <h4 class="text-center" style="color:black ;">Selesaikan pesanan anda untuk dapat membooking lapangan!</h4>
        
            <div class="d-flex justify-content-center" style="color:black ;">
            <form class="px-5" method="post" enctype="multipart/form-data" action="<?= BASEURL ?>/Pembayaran/uploadBukti">
  
  <table class="mt-5">
      <tr class="">
          <td><label for="biayaBooking" class="col-form-label">Biaya Booking : </label></td>
          <td><input type="text" id="biayaBooking" class="form-control mb-3" aria-describedby="biayaBooking" value="<?= $data[
              "harga"
          ] ?>" readonly disabled></td>
      </tr>
    </table>
    <tr>
        <td><label for="inputGroupFile04" class="form-label">Foto bukti pembayaran:</label></td>
    </tr>
    <div class="input-group mt-0 mb-5">
        <input type="file" class="form-control" name="fileBukti" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    </div>
    <input type="hidden" name="idPesanan" value="<?= $data["idPesanan"] ?>">
    <div class="d-flex justify-content-center">
        <!-- <button type="submit" class="btn btn-primary mb-5">Upload Bukti Pembayaran</button> -->
        <input type="submit" class="btn btn-primary mb-5" value="Upload Bukti Pembayaran" name="submit">
    </div>
  </input>
        </div>
      </div>
          </div>
        </div>
</div>
