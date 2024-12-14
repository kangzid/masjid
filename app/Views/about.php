<?php include(APPPATH . 'Views/partials/header.php'); ?>
<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
    <h5 class="ms-3">تحميل</h5>
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
                                    Tentang Masjid Al Hikmah
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
                        <a href="<?= base_url('about') ?>" class="nav-item nav-link active">About</a>
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
                            <h1 class="animate__animated animate__rubberBand display-1 text-dark">About Us</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">About</li>
                            </ol>
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
                                <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Kegiatan Sosial</p>
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
        <?php include(APPPATH . 'Views/partials/footer.php'); ?>