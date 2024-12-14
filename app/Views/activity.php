<?php include(APPPATH . 'Views/partials/header.php'); ?>
<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
    <h5 class="ms-3"> نشاط   </h5>
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
                                    Aktifitas & Rutinitas Kegiatan
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
                        <a href="<?= base_url('/') ?>" class="nav-item nav-link">Home</a>
                        <a href="<?= base_url('about') ?>" class="nav-item nav-link">About</a>
                        <a href="<?= base_url('activity') ?>" class="nav-item nav-link active">Aktifitas</a>
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
                <a href="<?= base_url('comingsoon') ?>" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Donasi</a>
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
                            <h1 class="animate__animated animate__rubberBand display-1 text-dark">Kegiatan</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Kegiatan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

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
        <!-- Activities Start -->
        <?php include(APPPATH . 'Views/partials/footer.php'); ?>