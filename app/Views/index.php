<?php include(APPPATH . 'Views/partials/header.php'); ?>
<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar d-none d-lg-block">
            <div class="topbar-inner">
                <div class="row gx-0">
                    <div class="col-lg-7 text-start">
                        <div class="h-100 d-inline-flex align-items-center me-4">
                            <span class="fa fa-phone-alt me-2 text-dark"></span>
                            <a href="tel:<?= $kontak; ?>" class="text-secondary"><span><?= $kontak; ?></span></a>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center">
                            <span class="far fa-envelope me-2 text-dark"></span>
                            <a href="mailto:<?= $email; ?>" class="text-secondary"><span><?= $email; ?></span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-end">
                        <div class="h-100 d-inline-flex align-items-center">
                            <span class="text-body">Follow Us:</span>
                            <a class="text-dark px-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="text-dark px-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="text-dark px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="text-dark px-2" href=""><i class="fab fa-instagram"></i></a>
                            <div class="text-body ps-4 overflow-hidden" style="width: 200px; white-space: nowrap;">
                                <span class="d-inline-block animate-scroll">
                                    Selamat Datang di Website <?= $nama_masjid; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-3">
            <a href="<?= base_url('/') ?>" class="navbar-brand d-flex align-items-center">
                <img src="<?= base_url('img/about-logo.jpg') ?>" alt="Logo Masjid" style="height: 50px; width: 160px; margin-left: 8px;">
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav ms-lg-auto mx-xl-auto">
                        <a href="<?= base_url('/') ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?= base_url('about') ?>" class="nav-item nav-link">About</a>
                        <a href="<?= base_url('activity') ?>" class="nav-item nav-link">Aktifitas</a>
                        <a href="<?= base_url('event') ?>" class="nav-item nav-link">Acara</a>
                        <a href="<?= base_url('sermon') ?>" class="nav-item nav-link">Kajian</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 rounded-0">
                                <a href="<?= base_url('blog') ?>" class="dropdown-item">Blog</a>
                                <a href="<?= base_url('profil') ?>" class="dropdown-item">Profil</a>
                                <a href="<?= base_url('jadwal_sholat') ?>" class="dropdown-item">Jadwal Sholat</a>
                                <a href="<?= base_url('peraturan') ?>" class="dropdown-item">Peraturan</a>
                            </div>
                        </div>
                        <a href="<?= base_url('contact') ?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Topbar End -->


        <!-- Hero Start -->
        <div class="container-fluid hero-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-header-inner animated zoomIn">
                            <p class="fs-4 text-dark">WELCOME TO </p>
                            <h1 class="animate__animated animate__rubberBand display-1 mb-5 text-dark"><?= $nama_masjid; ?></h1>
                            <h3 class="animate__animated animate__swing display-3 mb-2 text-dark">مسجد الحكمة</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


<!-- About Satrt -->
<div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-xl-6">
                        <div class="row g-4">
                            <div class="col-6">
                                <img src="img/about-1.jpg" class="img-fluid h-100 wow zoomIn" data-wow-delay="0.1s" alt="">
                            </div>
                            <div class="col-6">
                                <img src="img/about-2.jpg" class="img-fluid pb-3 wow zoomIn" data-wow-delay="0.1s" alt="">
                                <img src="img/about-3.jpg" class="img-fluid pt-3 wow zoomIn" data-wow-delay="0.1s" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fs-5 text-uppercase text-primary">About <?= $nama_masjid; ?></p>
                    <h1 class="display-5 pb-4 m-0">"Selamat Datang! Mari Bersama Membangun Iman."</h1>
                    <p class="pb-4"><?= $deskripsi; ?></p>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="ps-3 d-flex align-items-center justify-content-start">
                                    <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i class="fa fa-eye text-dark fa-4x mb-5 pb-2"></i></span>
                                    <div class="ms-4">
                                        <h5>Visi Kami</h5>
                                        <p>Menjadi pusat spiritual dan sosial yang menginspirasi umat untuk beribadah, berkontribusi, dan membangun komunitas yang harmonis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ps-3 d-flex align-items-center justify-content-start">
                                    <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i class="fa fa-flag text-dark fa-4x mb-5 pb-2"></i></span>
                                    <div class="ms-4">
                                    <h5>Misi Kami</h5>
                                    <p>Memberdayakan umat melalui pendidikan, pelayanan sosial, dan kegiatan keagamaan yang mendukung pertumbuhan spiritual dan kebersamaan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light p-3 mb-4">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-3">
                                    <img src="https://th.bing.com/th/id/OIP.q9A_Emwht-qOIcdAEw82yQHaHa?w=208&h=209&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="col-6">
                                    <p class="mb-0">"Marilah kita sholat, karena sholat adalah tiang agama." (HR. Ahmad).</p>
                                </div>
                                <div class="col-3">
                                        <h2 class="mb-0 text-primary text-center">.....</h2>
                                        <h5 class="mb-0 text-center">......</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <p class="mb-2"><i class="fa fa-check text-primary me-3"></i>Amal & Donasi</p>
                                <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Pendidikan Muslim</p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-2"><i class="fa fa-check text-primary me-3"></i>Kajian</p>
                                <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Pembangunan Masjid</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center bg-primary py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-2">
                            <i class="fa fa-mosque fa-5x text-white"></i>
                        </div>
                        <div class="col-lg-7 text-center text-lg-start">
                            <h1 class="mb-0">Setiap Muslim Perlu Menyadari Pentingnya “Rukun” Islam</h1>
                        </div>
                        <div class="col-lg-3">
                            <a href="<?= base_url('sermon') ?>" class="btn btn-light py-2 px-4">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Team Start -->
<!-- Struktur  Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">Struktur </p>
            <h1 class="display-3">Kepengurusan Masjid</h1>
        </div>
        <div class="text-center">
            <img src="img/strukturkepengurusan.png" alt="Struktur Kepengurusan Masjid" class="img-fluid team-image">
        </div>
        <div class="text-center mt-4">
            <a href="" target="_blank" class="btn btn-primary">Dokumen Kepengurusan</a>
        </div>
    </div>
</div>
<!-- Struktur  End -->
        <?php
// Koneksi ke database
$db = \Config\Database::connect();
$query = $db->query("SELECT * FROM events");
$events = $query->getResultArray();
?>

<!-- Activities Start -->
<div class="container-fluid activities py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">Kegiatan</p>
            <h1 class="display-3">Inilah Kegiatan Kami</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa-solid fa-person-praying fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Shalat Berjamaah</h4>
                        <p class="mb-4"></p>
                        <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa-solid fa-book-open-reader fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Kajian Islam</h4>
                        <p class="mb-4"></p>
                        <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-quran fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Pendidikan </h4>
                        <p class="mb-4"></p>
                        <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-donate fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Donasi & Amal</h4>
                        <p class="mb-4"></p>
                        <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-mosque fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Majelis Taklim</h4>
                        <p class="mb-4"></p>
                        <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa-solid fa-people-carry-box fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Kegiatan Sosial</h4>
                        <p class="mb-4"></p>
                        <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Events Start -->
<div class="container-fluid event py-5">
    <div class="container py-5">
        <h1 class="display-3 mb-5">Acara <span class="text-primary">Mendatang</span></h1>

        <?php if (!empty($events)) : ?>
            <?php foreach ($events as $event) : ?>
                <div class="row g-4 event-item mb-4">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6><?= esc($event['tanggal']); ?></h6>
                            <p class="mb-0"><?= esc($event['waktu']); ?></p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3"><?= esc($event['judul']); ?></h4>
                            <p class="mb-4"><?= esc($event['deskripsi']); ?></p>
                            <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">Info lengkap</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="<?= base_url('img/' . $event['gambar']); ?>" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-center">Belum ada acara yang tersedia.</p>
        <?php endif; ?>

    </div>
</div>
<!-- Events End -->


        <!-- Sermon Start -->
        <div class="container-fluid sermon py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Kajian</p>
                    <h1 class="display-3">Join The Islamic Community</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="sermon-item wow fadeIn" data-wow-delay="0.1s">
                            <div class="overflow-hidden p-4 pb-0">
                                <img src="img/sermon-1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="p-4">
                                <div class="sermon-meta d-flex justify-content-between pb-2">
                                    <div class="">
                                        <small><i class="fa fa-calendar me-2 text-muted"></i><a href="" class="text-muted me-2">13 Jan 2025</small></a>
                                        <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted">Admin</small></a>
                                    </div>
                                    <div class="">
                                        <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                        <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                                    </div>
                                </div>
                                <a href="<?= base_url('comingsoon') ?>" class="d-inline-block h4 lh-sm mb-3">Bagaimana mendekatkan diri pada Allah</a>
                                <p class="mb-0">sebuah perjalanan spiritual yang memerlukan ketulusan dan komitmen. Dalam kehidupan sehari-hari, kita sering kali terjebak dalam rutinitas yang membuat kita lupa akan pentingnya hubungan kita dengan Sang Pencipta.</p>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-6 col-xl-4">
                        <div class="sermon-item wow fadeIn" data-wow-delay="0.3s">
                            <div class="overflow-hidden p-4 pb-0">
                                <img src="img/sermon-2.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="p-4">
                                <div class="sermon-meta d-flex justify-content-between pb-2">
                                    <div class="<?= base_url('comingsoon') ?>">
                                        <small><i class="fa fa-calendar me-2 text-muted"></i><a href="" class="text-muted me-2">13 Jan 2025</small></a>
                                        <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted">Admin</small></a>
                                    </div>
                                    <div class="">
                                        <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                        <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                                    </div>
                                </div>
                                <a href="<?= base_url('comingsoon') ?>" class="d-inline-block h4 lh-sm mb-3">Pentingnya Haji dalam Islam</a>
                                <p class="mb-0">Haji adalah salah satu rukun Islam yang memiliki makna mendalam dan penting bagi setiap Muslim. Setiap tahun, jutaan umat Islam dari seluruh dunia berkumpul di Tanah Suci Makkah untuk melaksanakan ibadah ini, yang merupakan simbol persatuan dan kesetaraan di hadapan Allah.</p>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-6 col-xl-4">
                        <div class="sermon-item wow fadeIn" data-wow-delay="0.5s">
                            <div class="overflow-hidden p-4 pb-0">
                                <img src="img/sermon-3.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="p-4">
                                <div class="sermon-meta d-flex justify-content-between pb-2">
                                    <div class="">
                                        <small><i class="fa fa-calendar me-2 text-muted"></i><a href="" class="text-muted me-2">13 Nov 2023</small></a>
                                        <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted">Admin</small></a>
                                    </div>
                                    <div class="">
                                        <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                        <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                                    </div>
                                </div>
                                <a href="<?= base_url('comingsoon') ?>" class="d-inline-block h4 lh-sm mb-3">Muslim Perlu Menyadari Pentingnya “Rukun” Islam</a>
                                <p class="mb-0">Rukun Islam adalah fondasi utama yang membentuk keimanan dan praktik seorang Muslim. Terdiri dari lima pilar, yaitu syahadat, salat, zakat, puasa, dan haji, setiap rukun memiliki peran yang sangat penting dalam kehidupan spiritual dan sosial umat Islam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sermon End -->


        <!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="display-3 mb-5 wow fadeIn" data-wow-delay="0.1s">Terbaru Dari <span class="text-primary">Blog Kami</span></h1>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-6 col-xl-4">
                <div class="blog-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="img/blog-1.jpg" class="img-fluid w-100" alt="">
                        <div class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">01 Jan 2045</div>
                    </div>
                    <div class="p-4">
                        <div class="blog-meta d-flex justify-content-between pb-2">
                            <div class="">
                                <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted me-2">By Admin</small></a>
                                <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href="" class="text-muted me-2">12 Comments</small></a>
                            </div>
                            <div class="">
                                <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                            </div>
                        </div>
                        <a href="" class="d-inline-block h4 lh-sm mb-3">Pentingnya Rukun Islam</a>
                        <p class="mb-4">Rukun Islam adalah pilar-pilar utama yang menjadi dasar bagi setiap Muslim. Memahami dan melaksanakan rukun ini sangat penting untuk memperkuat iman dan praktik ibadah kita sehari-hari.</p>
                        <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="blog-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="img/blog-2.jpg" class="img-fluid w-100" alt="">
                        <div class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">01 Jan 2045</div>
                    </div>
                    <div class="p-4">
                        <div class="blog-meta d-flex justify-content-between pb-2">
                            <div class="">
                                <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted me-2">By Admin</small></a>
                                <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href="" class="text-muted me-2">12 Comments</small></a>
                            </div>
                            <div class="">
                                <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                            </div>
                        </div>
                        <a href="" class="d-inline-block h4 lh-sm mb-3">Cara Mendekatkan Diri kepada Allah</a>
                        <p class="mb-4">Mendekatkan diri kepada Allah adalah proses yang memerlukan ketulusan dan usaha. Dengan berdoa, membaca Al-Qur'an, dan beramal, kita dapat memperkuat hubungan spiritual kita.</p>
                        <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="blog-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="img/blog-3.jpg" class="img-fluid w-100" alt="">
                        <div class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">01 Jan 2045</div>
                    </div>
                    <div class="p-4">
                        <div class="blog-meta d-flex justify-content-between pb-2">
                            <div class="">
                                <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted me-2">By Admin</small></a>
                                <small><i class="fa fa-comment -alt me-2 text-muted"></i><a href="" class="text-muted me-2">12 Comments</small></a>
                            </div>
                            <div class="">
                                <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                            </div>
                        </div>
                        <a href="" class="d-inline-block h4 lh-sm mb-3">Pentingnya Haji dalam Islam</a>
                        <p class="mb-4">Haji adalah ibadah yang sangat mulia dan merupakan rukun Islam yang kelima. Melaksanakan haji tidak hanya memenuhi kewajiban, tetapi juga memberikan pengalaman spiritual yang mendalam dan memperkuat persatuan umat Islam di seluruh dunia.</p>
                        <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary px-3">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->




        <!-- Team End -->


        
<!-- Kata Islami Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">Kata Islami</p>
            <h1 class="display-3">Pesan Inspiratif Islami</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
            <!-- Pesan 1 -->
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <div class="btn-lg-square bg-primary rounded-circle position-relative text-white" style="font-size: 2rem;">
                            <i class="fa fa-star text-white"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto">
                        <h5 class="mb-0">Sholat</h5>
                        <p class="m-0">"Dirikanlah sholat, karena sholat mencegah perbuatan keji dan mungkar."</p>
                        <small>- QS. Al-Ankabut: 45</small>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p class="fs-5 m-0 pt-3">Mari tingkatkan kekhusyukan dalam sholat sebagai bekal kita di akhirat.</p>
                </div>
            </div>
            
            <!-- Pesan 2 -->
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <div class="btn-lg-square bg-primary rounded-circle position-relative text-white" style="font-size: 2rem;">
                            <i class="fa fa-heart text-white"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto">
                        <h5 class="mb-0">Sedekah</h5>
                        <p class="m-0">"Harta tidak akan berkurang karena sedekah, tetapi akan semakin bertambah."</p>
                        <small>- Hadis Riwayat Muslim</small>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p class="fs-5 m-0 pt-3">Sedekah adalah wujud cinta kepada Allah dan sesama manusia.</p>
                </div>
            </div>
            
            <!-- Pesan 3 -->
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <div class="btn-lg-square bg-primary rounded-circle position-relative text-white" style="font-size: 2rem;">
                            <i class="fa fa-book text-white"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto">
                        <h5 class="mb-0">Al-Qur'an</h5>
                        <p class="m-0">"Bacalah Al-Qur'an, karena ia akan menjadi syafaat bagi pembacanya."</p>
                        <small>- Hadis Riwayat Muslim</small>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p class="fs-5 m-0 pt-3">Luangkan waktu untuk mendekatkan diri kepada Allah melalui Al-Qur'an.</p>
                </div>
            </div>
            
            <!-- Pesan 4 -->
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <div class="btn-lg-square bg-primary rounded-circle position-relative text-white" style="font-size: 2rem;">
                            <i class="fa fa-pray text-white"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto">
                        <h5 class="mb-0">Doa</h5>
                        <p class="m-0">"Berdoalah kepada-Ku, maka Aku akan mengabulkan doamu."</p>
                        <small>- QS. Al-Ghafir: 60</small>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p class="fs-5 m-0 pt-3">Jadikan doa sebagai kekuatan untuk menghadapi kehidupan sehari-hari.</p>
                </div>
            </div>
            
            <!-- Pesan 5 -->
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <div class="btn-lg-square bg-primary rounded-circle position-relative text-white" style="font-size: 2rem;">
                            <i class="fa fa-hand-holding-heart text-white"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto">
                        <h5 class="mb-0">Tawakal</h5>
                        <p class="m-0">"Barangsiapa bertawakal kepada Allah, maka Allah akan mencukupkan kebutuhannya."</p>
                        <small>- QS. At-Talaq: 3</small>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p class="fs-5 m-0 pt-3">Percayakan segalanya kepada Allah setelah berusaha dengan sungguh-sungguh.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kata Islami End -->



        <?php include(APPPATH . 'Views/partials/footer.php'); ?>
