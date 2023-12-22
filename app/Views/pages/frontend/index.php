<?= $this->extend('layouts/frontend/base_layouts') ?>
<?= $this->section('title') ?>Beranda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container my-2">
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/berita/b3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/berita/b2.JPG" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container my-5">
    <div class="content text-center">
        <h2>Selamat Datang Di Website SMPN 3 Subang</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores fuga sed doloremque numquam harum nobis hic
            commodi id. Incidunt provident doloribus molestiae cum saepe iste autem nemo, recusandae quos eum!</p>
    </div>
</div>
<div class="container">
    <div class="row gap-2 justify-content-center">
        <div class="col-1_5 bg-body-tertiary p-5 text-center rounded-3 shadow-sm">
            <h4>C</h4>
            Cerdas
        </div>
        <div class="col-1_5 bg-body-tertiary p-5 text-center rounded-3 shadow-sm">
            <h4>A</h4>
            Agamis
        </div>
        <div class="col-1_5 bg-body-tertiary p-5 text-center rounded-3 shadow-sm">
            <h4>N</h4>
            Nyaman
        </div>
        <div class="col-1_5 bg-body-tertiary p-5 text-center rounded-3 shadow-sm">
            <h4>T</h4>
            Tertib
        </div>
        <div class="col-1_5 bg-body-tertiary p-5 text-center rounded-3 shadow-sm">
            <h4>I</h4>
            Inovatif
        </div>
        <div class="col-1_5 bg-body-tertiary p-5 text-center rounded-3 shadow-sm">
            <h4>K</h4>
            Kreatif
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="agenda">
        <h2 class="text-center">Agenda</h2>
        <div class="row row-gap-2 my-5">
            <div class="col-4">
                <!-- Card 1 -->
                <div class="card position-relative">
                    <img src="https://placekitten.com/300/200" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <a href="" class="stretched-link link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-body">
                            <h5 class="card-title">Agenda 1</h5>
                        </a>
                        <small class="card-subtitle">01 Januari 2023 | Lokasi 1</small>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sint dolore sunt. Exercitationem
                            excepturi in quod laboriosam expedita doloribus similique voluptates nesciunt impedit quas minima id
                            voluptatem, error libero ut?</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <!-- Card 2 -->
                <div class="card position-relative">
                    <img src="https://placekitten.com/300/201" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <a href="" class="stretched-link text-body link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                            <h5 class="card-title">Agenda 2</h5>
                        </a>
                        <small class="card-subtitle">01 Januari 2023 | Lokasi 1</small>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloribus laudantium sapiente veritatis
                            nesciunt molestias odit deserunt dolor debitis dolorum consectetur rem rerum praesentium expedita
                            maiores porro, atque itaque odio?</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <!-- Card 3 -->
                <div class="card position-relative">
                    <img src="https://placekitten.com/300/202" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <a href="" class="stretched-link link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-body">
                            <h5 class="card-title">Agenda 2</h5>
                        </a>
                        <small class="card-subtitle">01 Januari 2023 | Lokasi 1</small>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam cupiditate totam quaerat accusamus
                            error quo aliquam ab mollitia natus sed laudantium, quas inventore perspiciatis illo, officiis nam earum
                            ipsam culpa?</p>
                    </div>
                </div>
            </div>

            <!-- Tambahkan card lainnya sesuai kebutuhan -->
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="berita">
        <h2 class="text-center">Berita Terbaru</h2>
        <div class="row my-5">
            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="mb-4 overflow-hidden border rounded shadow-sm row g-0 flex-md-row h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block my-auto px-4">
                        <img src="img/berita/b1.jpg" class="img-fluid" width="200" alt="Berita 1">
                    </div>
                    <div class="p-4 col d-flex flex-column position-static">
                        <a href="" class="gap-1 stretched-link link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-body">
                            <h5 class="mb-0">
                                Juara Sekolah Sehat
                            </h5>
                        </a>

                        <small class="mb-1 text-body-secondary">Jun 21 | Admin</small>
                        <p class="mb-auto"></p>
                        <p>
                            SMPN 3 Subang mencatatkan sejarah dengan meraih prestasi Juara 1 Lomba Sekolah Sehat tingkat Kabupaten
                            Subang. Prestasi tersebut menjadi motivasi untuk berprestasi di tingkat provinsi maupun nasional.
                            Prestasi tersebut didapatkan dengan proses panjang yang telah dilakukan. Prestasi didapat tidak dengan
                            instan, nelainkan dengan kerja keras dan kekompakan siswa dan guru termasuk orang tua siswa.
                        </p>

                    </div>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="mb-4 overflow-hidden border rounded shadow-sm row g-0 flex-md-row h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block my-auto px-4">
                        <img src="img/berita/b2.JPG" class="img-fluid" width="200" alt="Berita 1">
                    </div>
                    <div class="p-4 col d-flex flex-column position-static">
                        <a href="" class="gap-1 stretched-link link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-body">
                            <h5 class="mb-0">
                                Tahun Ajaran Baru Siap Laksanakan Kbm Dengan Perhatikan Protokol Kesehatan
                            </h5>
                        </a>

                        <small class="mb-1 text-body-secondary">Jun 21 | Admin</small>
                        <p class="mb-auto"></p>
                        <p>
                            Menjelang Tahun ajaran baru, yang bersamaan dengan diberlakukannya New Normal atau Adaptasi Kebiasaan
                            Baru (AKB), ditengah penangan Covid-19. SMP Negeri 3 Subang Jawa Barat, telah siap melaksanakan proses
                            Kegiatan Belajar Mengajar (KBM) dengan tetap memperhatikan protokol kesehatan Covid-19, untuk mencegah
                            penyebaran virus Corona.
                        </p>

                    </div>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="mb-4 overflow-hidden border rounded shadow-sm row g-0 flex-md-row h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block my-auto px-4">
                        <img src="img/berita/b3.jpg" class="img-fluid" width="200" alt="Berita 1">
                    </div>
                    <div class="p-4 col d-flex flex-column position-static">
                        <a href="" class="gap-1 stretched-link link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-body">
                            <h5 class="mb-0">
                                Komitmen Tata Lingkungan, Jadikan Smpn 3 Subang Sebagai Sekolah Adiwiyata
                            </h5>
                        </a>

                        <small class="mb-1 text-body-secondary">Jun 21 | Admin</small>
                        <p class="mb-auto"></p>
                        <p>
                            Kesuksesan menata lingkungan SMPN 3 Subang yang nyaman tidak terlepas dari peran Jaenal Abidin SPd MMPd.
                            Kepala sekolah yang menjabat sejak Juli 2018 itu terus melakukan gebrakan untuk menata lingkungan
                            sekolah yang nyaman.
                        </p>

                    </div>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="mb-4 overflow-hidden border rounded shadow-sm row g-0 flex-md-row h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block my-auto px-4">
                        <img src="img/berita/b4.jpg" class="img-fluid" width="200" alt="Berita 1">
                    </div>
                    <div class="p-4 col d-flex flex-column position-static">
                        <a href="" class="gap-1 stretched-link link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-body">
                            <h5 class="mb-0">
                                Taman Cantik Dan Ganteng Amat Jadi Daya Tarik
                            </h5>
                        </a>

                        <small class="mb-1 text-body-secondary">Jun 21 | Admin</small>
                        <p class="mb-auto"></p>
                        <p>
                            Penataan lingkungan sekolah tidak terlepas dari motto CANTIK (Cerdas, Agamis, Nyaman, Tertib, Inovatif
                            dan Kreatif). Motto tersebut menjadi spirit bersama untuk menata lingkungan sekolah.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="text-center mb-5">Struktur Organisasi</h2>
    <div class="owl-carousel owl-theme ">
        <!-- Card 1 -->
        <div class="item">
            <div class="card">
                <img src="img/5.jpeg" class="card-img-top" alt="Anggota Organisasi 1">
                <div class="card-body">
                    <h5 class="card-title">Rendhi Richardo Ardiansyah</h5>
                    <p class="card-text">Kepala Sekolah</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="item">
            <div class="card">
                <img src="img/2.jpeg" class="card-img-top" alt="Anggota Organisasi 2">
                <div class="card-body">
                    <h5 class="card-title">Cupita Sari</h5>
                    <p class="card-text">Wakil Kepala Sekolah</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="item">
            <div class="card">
                <img src="img/1.jpeg" class="card-img-top" alt="Anggota Organisasi 3">
                <div class="card-body">
                    <h5 class="card-title">Gangan Pamungkas</h5>
                    <p class="card-text">Kepala Keamanan</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="item">
            <div class="card">
                <img src="img/3.jpeg" class="card-img-top" alt="Anggota Organisasi 4">
                <div class="card-body">
                    <h5 class="card-title">Tia Fitriana</h5>
                    <p class="card-text">Sekertaris</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <img src="img/4.jpeg" class="card-img-top" alt="Anggota Organisasi 5">
                <div class="card-body">
                    <h5 class="card-title">Nindia Oktapia</h5>
                    <p class="card-text">Bendahara</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>