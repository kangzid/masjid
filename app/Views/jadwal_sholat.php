<?php include(APPPATH . 'Views/partials/header.php'); ?>
<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
    <h5 class="ms-3"> أوقات الصلاة   </h5>
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
                                    Jadwal Sholat Hari ini
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
                            <h1 class="animate__animated animate__rubberBand display-1 text-dark">Jadwal Sholat</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">jadwal sholat</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <body>
<!-- Jadwal Sholat Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">Jadwal Sholat</p>
            <h1 class="display-3">
                Jadwal Sholat Hari Ini
                <br>
                <span id="jadwalTanggal" class="text-primary fs-4"></span>
            </h1>
        </div>
        <div class="row" id="jadwalSholatContainer">
            <!-- Data Jadwal Sholat akan dimasukkan oleh JavaScript -->
        </div>
    </div>
</div>
<!-- Jadwal Sholat End -->
 <!-- Jadwal Imam Start -->
 <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center text-primary mb-4">Jadwal Imam</h2>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Waktu Sholat</th>
                            <th>Nama Imam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($imamData as $waktu => $imam): ?>
                            <tr>
                                <td><?= $waktu; ?></td>
                                <td><?= $imam; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Jadwal Imam End -->

    <!-- Jadwal Muadzin Start -->
    <div class="container-fluid py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Jadwal Muadzin</h2>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Hari</th>
                        <th>Subuh</th>
                        <th>Dzuhur</th>
                        <th>Ashar</th>
                        <th>Maghrib</th>
                        <th>Isya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Menghubungkan ke database
                    $conn = new mysqli('localhost', 'root', 'sidakaton', 'masjid_db');
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Query untuk mendapatkan jadwal muadzin per hari
                    $sqlMuadzin = "
                        SELECT hari,
                            MAX(CASE WHEN waktu_sholat = 'Subuh' THEN muadzin ELSE NULL END) AS subuh,
                            MAX(CASE WHEN waktu_sholat = 'Dzuhur' THEN muadzin ELSE NULL END) AS dzuhur,
                            MAX(CASE WHEN waktu_sholat = 'Ashar' THEN muadzin ELSE NULL END) AS ashar,
                            MAX(CASE WHEN waktu_sholat = 'Maghrib' THEN muadzin ELSE NULL END) AS maghrib,
                            MAX(CASE WHEN waktu_sholat = 'Isya' THEN muadzin ELSE NULL END) AS isya
                        FROM jadwal_muadzin
                        GROUP BY hari
                        ORDER BY FIELD(hari, 'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu')
                    ";
                    $resultMuadzin = $conn->query($sqlMuadzin);

                    if ($resultMuadzin->num_rows > 0) {
                        while ($row = $resultMuadzin->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['hari']}</td>
                                    <td>{$row['subuh']}</td>
                                    <td>{$row['dzuhur']}</td>
                                    <td>{$row['ashar']}</td>
                                    <td>{$row['maghrib']}</td>
                                    <td>{$row['isya']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada data muadzin.</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- Jadwal Muadzin End -->

    <style>
    /* Mengatur gaya untuk header tabel */
    .table {
        border-collapse: collapse;
        width: 100%;
        margin: 20px 0;
        font-size: 1rem;
        font-family: Arial, sans-serif;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .table thead th {
        background-color: #f1c152; /* Warna hijau */
        color: white;
        padding: 10px 15px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border: 1px solid #ddd;
    }

    /* Gaya untuk baris tubuh tabel */
    .table tbody tr {
        border-bottom: 1px solid #ddd;
        transition: background-color 0.3s ease;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9; /* Warna abu-abu muda */
    }

    .table tbody tr:hover {
        background-color: #f1f1f1; /* Warna abu-abu saat hover */
    }

    .table tbody td {
        padding: 10px 15px;
        font-size: 0.95rem;
        color: #333;
    }

    /* Gaya untuk border tabel */
    .table-bordered td, 
    .table-bordered th {
        border: 1px solid #ddd;
    }

    /* Animasi hover */
    .table tbody tr:hover td {
        color: #4CAF50; /* Warna teks saat hover */
        transform: scale(1.02);
    }

    /* Gaya untuk tabel responsif */
    .table-responsive {
        overflow-x: auto;
    }

    /* Tambahan shadow untuk header tabel */
    .table thead th {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>


    <style>
    /* CSS Tambahan */
    .icon-container {
        position: relative;
    }

    .icon-circle {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .card-body h5 {
        font-size: 1.2rem;
        color: #333;
    }

    .card-body p {
        font-size: 1.1rem;
        color: #666;
    }

    .card {
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        background-color: #f0f0f0; /* Warna abu-abu */
    transition: background-color 0.3s ease;
    }
</style>

    

<?php include(APPPATH . 'Views/partials/footer.php'); ?>
