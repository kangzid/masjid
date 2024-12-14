<?php include(APPPATH . 'Views/partials/header.php'); ?>
<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
<body>
        <!-- Hero Start -->
        <div class="container-fluid hero-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-header-inner animated zoomIn">
                            <h1 class="animate__animated animate__rubberBand display-1 text-dark">Acara</h1>
                            <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('about') ?>">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Acara</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
    <h5 class="ms-3">   برنامج    </h5>
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
                                    Info Acara Masjid Al Hikmah
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
                        <a href="<?= base_url('event') ?>" class="nav-item nav-link active">Acara</a>
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

    <?php
// Koneksi ke database
$db = \Config\Database::connect();
$query = $db->query("SELECT * FROM events");
$events = $query->getResultArray();
?>

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

        <?php include(APPPATH . 'Views/partials/footer.php'); ?>