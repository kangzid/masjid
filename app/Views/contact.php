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
                                    Kontak Kritik & Saran
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
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 rounded-0">
                                <a href="<?= base_url('blog') ?>" class="dropdown-item">Blog</a>
                                <a href="<?= base_url('profil') ?>" class="dropdown-item">Profil</a>
                                <a href="<?= base_url('jadwal_sholat') ?>" class="dropdown-item">Jadwal Sholat</a>
                                <a href="<?= base_url('peraturan') ?>" class="dropdown-item">Peraturan</a>
                            </div>
                        </div>
                        <a href="<?= base_url('contact') ?>" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
                <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Donasi</a>
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
                            <h1 class="display-1 text-dark">Contact</h1>
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
        
<!-- Contact Start -->
<div class="container-fluid contact py-5" style="background: linear-gradient(to right, #007bff, #ffc107);">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-white">Kritik dan Saran</p>
            <h1 class="text-4xl font-bold text-white mb-4">Berikan Masukan untuk Website Masjid Kami</h1>
            <p class="mb-0 text-white">Kami sangat menghargai pendapat Anda! Silakan berikan kritik dan saran Anda untuk membantu kami meningkatkan website masjid ini. Isi form di bawah ini dan kami akan meninjau setiap masukan dengan serius.</p>
        </div>
        <form action="/submit-feedback" method="post">
    <?= csrf_field() ?> <!-- Token CSRF -->
    <input type="hidden" name="hidden_field" style="display: none;"> <!-- Honeypot -->
    <div class="row g-4 wow fadeIn" data-wow-delay="0.3s">
        <div class="col-sm-6">
            <input type="text" class="form-control frosted-glass text-white" name="nama" placeholder="Nama Anda" required>
        </div>
        <div class="col-sm-6">
            <input type="email" class="form-control frosted-glass" name="email" placeholder="Email Anda" required>
        </div>
        <div class="col-12">
            <input type="text" class="form-control frosted-glass" name="subjek" placeholder="Subjek Kritik/Saran" required>
        </div>
        <div class="col-12">
            <textarea class="w-full form-control frosted-glass" rows="6" name="pesan" placeholder="Tulis Kritik dan Saran Anda" required></textarea>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-primary bg-blue-600 text-white font-semibold py-3 px-5 rounded-lg transition-transform transform hover:bg-blue-700 hover:scale-105" type="submit">Kirim Masukan</button>
        </div>
    </div>
</form>


    </div>
</div>
<!-- Contact End -->
<?php if (session()->getFlashdata('success')): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '<?= session()->getFlashdata('success') ?>',
    });
</script>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Gagal',
        text: '<?= session()->getFlashdata('error') ?>',
    });
</script>
<?php endif; ?>

<!-- CSS Kustom -->
<style>
    .frosted-glass {
        background-color: rgba(255, 255, 255, 0.2); /* Latar belakang transparan */
        backdrop-filter: blur(10px); /* Efek blur */
        border-radius: 10px; /* Sudut melengkung */
        padding: 15px; /* Padding */
        border: 1px solid rgba(255, 255, 255, 0.5); /* Border transparan */
        transition: background-color 0.3s ease; /* Transisi halus untuk perubahan warna */
    }

    .frosted-glass:focus {
        background-color: rgba(255, 255, 255, 0.2); /* Tetap transparan saat fokus */
        outline: none; /* Menghilangkan outline default */
        border-color: rgba(255, 255, 255, 0.8); /* Ubah warna border saat fokus */
    }

    input::placeholder, textarea::placeholder {
        color: rgba(255, 255, 255, 0.7); /* Warna placeholder */
    }
</style>

        <?php include(APPPATH . 'Views/partials/footer.php'); ?>