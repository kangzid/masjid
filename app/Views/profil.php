
<?php include(APPPATH . 'Views/partials/header.php'); ?>
<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
    <h5 class="ms-3">   الملف التاريخي     </h5>
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
                                    Kumpulan Blog Terbaru 
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
                        <a href="<?= base_url('sermon') ?>" class="nav-item nav-link">Kajian</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
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
                            <h1 class="animate__animated animate__rubberBand display-1 text-dark">Profil Sejarah</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('activity') ?>">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Profil history</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <header class="bg-primary text-dark text-center py-5">
    <h1>Masjid Al Hikmah</h1>
    <p>Sejarah dan Profil Masjid Al Hikmah</p>
</header>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="<?= base_url('img/about-3.jpg') ?>" alt="Masjid Al Hikmah" class=" img-border-radius">
        </div>
        <div class="col-lg-6">
            <h2>Sejarah Masjid Al Hikmah</h2>
            <p>Masjid Al Hikmah dibangun pada tahun 1995 dengan tujuan untuk menyediakan tempat ibadah yang nyaman bagi umat muslim di sekitar kawasan ini. Masjid ini memiliki arsitektur yang unik dengan kombinasi desain modern dan tradisional. Seiring waktu, masjid ini menjadi pusat kegiatan sosial dan pendidikan, di mana berbagai acara keagamaan dan kegiatan masyarakat diselenggarakan.</p>
            <p>Masjid ini juga dikenal dengan kegiatan dakwah yang aktif serta pengajian rutin yang diadakan setiap minggu. Selain itu, Masjid Al Hikmah memiliki berbagai fasilitas yang mendukung kegiatan umat, seperti ruang kelas untuk pendidikan agama, perpustakaan, dan ruang serbaguna untuk acara komunitas.</p>
            <p>Dengan lebih dari 1000 jamaah yang rutin beribadah setiap harinya, Masjid Al Hikmah terus berperan sebagai pusat spiritual yang menginspirasi umat untuk lebih mendalami agama Islam.</p>
        </div>
    </div>
</div>

<style>
    body {
        /* Mengubah background header menjadi kuning emas dan teks menjadi hitam */
        font-family: Arial, sans-serif;
    }

    .bg-gold {
        background-color: #FFD700; /* Kuning emas */
    }

    .text-dark {
        color: #000000; /* Hitam */
    }

    header h1 {
        font-size: 3rem;
    }

    header p {
        font-size: 1.5rem;
    }

    /* Kelas untuk border radius pada gambar */
    .img-border-radius {
        border-radius: 30px; /* Atur radius sesuai kebutuhan */
    }
</style>

        <?php include(APPPATH . 'Views/partials/footer.php'); ?>