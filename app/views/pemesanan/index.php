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
<div class="container-fluid" style="color:white ; background-image: url(<?= BASEURL; ?>/img/background.png); background-size: cover;background-repeat: no-repeat; background-position: center; height: 90vh; width: 100%;">   
<div class="container">
    <div class="row ">
        
        <div class="paralax_pemesanan shadow-lg mt-4">
            <h1 class="text-center" style="color:black ;">Form Pemesanan</h1>
            <h4 class="text-center" style="color:black ;">Selesaikan pesanan anda untuk dapat membooking lapangan!</h4>
          <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6 mt-5" style="color:black ;">
        <form class="px-5" action="<?= BASEURL?>/Pemesanan/buatPesanan/" method="post">
<table class="">
    <tr class="">
        <td><label for="inputPassword6" class="col-form-label" >Lapangan : </label></td>
        <td><input type="text" id="inputPassword6" class="form-control mb-3" aria-describedby="passwordHelpInline" value="<?= $data['lapangan']['deskripsi'] ?>" disabled></td>
    </tr>
    <tr>
        <td><label for="inputPassword6" class="col-form-label">Penyedia : </label></td>
        <td><input type="text" id="inputPassword6" class="form-control mb-3" aria-describedby="passwordHelpInline" value="<?= $data['lapangan']['nama_penyedia'] ?>" disabled></td>
    </tr>
    <tr>
        <td><label for="inputPassword6" class="col-form-label">Tanggal/Jam : </label></td>
        <td><input type="text" id="inputPassword6" class="form-control mb-3" aria-describedby="passwordHelpInline" value="<?= $data['tanggal'].' / '.$data['jam'] ?>" disabled></td>
    </tr>
    <tr>
        <td><label for="inputPassword6" class="col-form-label">Pemesan : </label></td>
        <td><input type="text" id="inputPassword6" class="form-control mb-3" aria-describedby="passwordHelpInline" value="<?= $data['pemesan']['nama'] ?>" disabled></td>
    </tr>
</table>
<!-- </form> -->
        </div>
        <!-- akhir main bagian kiri -->

       
        <div class="col-md-5 col-lg-5 col-sm-5  mt-5 mx-auto" style="color:black ;">
        <div class="d-flex justify-content-center">
            <img src="<?= BASEURL; ?>/img/lapangan.png" alt="" height="250px">
        </div>
        <p>Lorem ipsum dolor sit amet. Et distinctio iure ut obcaecati tenetur est tempora quos aut earum voluptates. Et impedit dignissimos sit iure obcaecati ut expedita autem qui cumque sapiente </p>
        <div class="d-flex justify-content-end">
        <input type="hidden" name="id_pemesan" value="
            <?= 
                // $_SESSION['id'] 
                1
            ?>
            ">
        <input type="hidden" name="id_lapangan" value="<?= $data['lapangan']['id'] ?>">
        <input type="hidden" name="tanggal" value="<?= $data['tanggal'] ?>">
        <input type="hidden" name="jam_mulai" value="<?= $data['jam_mulai'] ?>">
        <input type="hidden" name="jam_selesai" value="<?= $data['jam_selesai'] ?>">
        <button type="submit" class="btn btn-primary mb-3">Confirm Book</button>
        </div>     
    </div>
          </form>
        </div>
        
      </div>
          </div>
        </div>
</div>

