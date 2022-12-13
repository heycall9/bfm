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
    <div class="">
        <?php Flasher::flash(); ?>
    </div>
<div class="container-fluid" style="color:white ; background-image: url(<?= BASEURL ?>/img/background.png); background-size: cover;background-repeat: no-repeat; background-position: center; height: 90vh; width: 100%;">   
    <div class="container">
        <div class="row">
            <div class="paralax_pemesanan mt-4 shadow text-black px-4">
                <div class="row">
                    <h1 class="text-center mt-4">Jadwal Lapangan</h1>
                </div>
                <div class="row mt-2">
                    <div class="d-flex col me-auto ">
                        <form class="" action="<?= BASEURL . "/DataLapanganFutsal/detailJadwal/" . $data['lapangan']['id'] ?>" method="post">
                            <label class="" for="formTanggal">Tanggal</label>
                            <div class="d-flex">
                                <input type="date" name="tanggal" id="formTanggal" class="form-control" value="<?= $data['lapangan']['tanggal'] ?>">
                                <button type="submit" class="btn btn-primary mt-2">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <h2 class="my-3"> Jadwal Tersedia </h2>
                <div class="d-flex justify-content-center">
                <div class="row d-flex mt-4 w-75">
                <form action="<?= BASEURL ?>/Pemesanan/tampilanPemesanan/<?= $data['lapangan']['id'] ?>" class="" method="post">
                <fieldset>
                        <?php foreach( $data['lapangan']['jadwalBuka'] as $jadwalBuka ): ?>
                            <?php if(in_array($jadwalBuka, $data['lapangan']['jadwalBooked'])): ?>
                                <input name="<?= $jadwalBuka ?>" type="checkbox" class="btn-check" style="width: 10%;" id="btn-check-<?= $jadwalBuka ?>" disabled autocomplete="off">
                                <label class="btn btn-outline-primary mx-4 my-2 p-3" style="width: 10%;" for="btn-check-<?= $jadwalBuka ?>"><?= $jadwalBuka ?>:00</label>
                            <?php else: ?>
                                <input name="<?= $jadwalBuka ?>" type="checkbox" class="btn-check " style="width: 10%;" id="btn-check-<?= $jadwalBuka ?>" autocomplete="off">
                                <label class="btn btn-outline-primary mx-4 my-2 p-3" style="width: 10%;" for="btn-check-<?= $jadwalBuka ?>"><?= $jadwalBuka ?>:00</label>
                            <?php endif; ?>
                        <?php endforeach; ?>
                </fieldset>
                <input type="hidden" name="tanggal" value="<?= $data['lapangan']['tanggal'] ?>">
                        <div class="row my-5 d-flex justify-content-center">
                        <button type="submit" class="w-75 btn btn-primary mt-2">Pesan</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
const btnCheck = document.querySelectorAll('.btn-check');
btnCheck.forEach((btn) => {
    btn.addEventListener('change', (e) => {
        if(e.target.checked){
            e.target.classList.add('btn-primary');
            e.target.classList.remove('btn-outline-primary');
        }else{
            e.target.classList.add('btn-outline-primary');
            e.target.classList.remove('btn-primary');
        }
    })
})
</script>
