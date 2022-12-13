<div class="container-fluid background-page" style="background-image: url('../.././img/layout/background.png') ;">
    <div class="container text-center pt-5 penyedia">
        <h1 class="text-light">Daftar Lapangan</h1>
    </div>

    <!-- Carousel Cards -->
    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
            <?php foreach($data['lapangan'] as $lapangan) : ?>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="<?= BASEURL; ?>/img/layout/lapangan.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lapangan <?= $lapangan['id']; ?></h2>
<<<<<<< HEAD
                        <a class=" btn btn-primary btn-sm" href="<?= BASEURL; ?>/kelolalapangan/jadwal/<?= $lapangan['id'] ?>">Lihat Jadwal</a>
=======
                        <a class=" btn btn-primary btn-sm" href="<?= BASEURL; ?>/DataLapanganFutsal/detailJadwal/<?= $lapangan['id']?>">Lihat Jadwal</a>
>>>>>>> a7ab60fbb0c6549fa551e80b9a558de769b2b1c2
                    </div>
                </div>
            <?php endforeach; ?>
            </div>

        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 4,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
            1080: {
                slidesPerView: 4,
            },
        },
    });
    </script>
</div>
