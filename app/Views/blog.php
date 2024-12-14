<?php include(APPPATH . 'Views/partials/header.php'); ?>
<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
<?php include(APPPATH . 'Views/partials/header.php'); ?>
<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
    <h5 class="ms-3">   مدونات    </h5>
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
                            <h1 class="animate__animated animate__rubberBand display-1 text-dark">Berita Terbaru</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('activity') ?>">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Berita</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
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
        <?php include(APPPATH . 'Views/partials/footer.php'); ?>