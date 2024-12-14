<?php include(APPPATH . 'Views/partials/header.php'); ?>
<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
    <body>

<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
    <h5 class="ms-3">   يذاكر    </h5>
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
                        <a href="<?= base_url('about') ?>" class="nav-item nav-link">About</a>
                        <a href="<?= base_url('activity') ?>" class="nav-item nav-link">Aktifitas</a>
                        <a href="<?= base_url('event') ?>" class="nav-item nav-link">Acara</a>
                        <a href="<?= base_url('sermon') ?>" class="nav-item nav-link active">Kajian</a>
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
                            <h1 class="animate__animated animate__rubberBand display-1 text-dark">Kajian</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('sermon') ?>">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Kajian</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

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
        <?php include(APPPATH . 'Views/partials/footer.php'); ?>