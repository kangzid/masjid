<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "sidakaton";
$dbname = "masjid_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query data informasi masjid
$sql = "SELECT nama_masjid, alamat, kontak, email, deskripsi, gambar FROM informasi_masjid WHERE id = 1"; // Gantilah dengan ID yang sesuai
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ambil data
    $row = $result->fetch_assoc();
    $nama_masjid = $row["nama_masjid"];
    $alamat = $row["alamat"];
    $kontak = $row["kontak"];
    $email = $row["email"];
    $deskripsi = $row["deskripsi"];
    $gambar = $row["gambar"];
} else {
    echo "Data tidak ditemukan";
}

$conn->close();
?>

<!-- Footer Start -->
<div class="container-fluid footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7">
                <h1 class="text-light mb-0">Daftar berita acara kami</h1>
                <p class="text-secondary">Dapatkan berita terbaru dan Informasi Islami lainnya</p>
            </div>
            <div class="col-lg-5">
                <div class="position-relative mx-auto">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Alamat email Anda">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Daftar</button>
                </div>
            </div>
            <div class="col-12">
                <div class="border-top border-secondary"></div>
            </div>
        </div>
        <div class="row g-4 footer-inner">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item mt-5">
                    <h4 class="text-light mb-4"><?= $nama_masjid; ?></span></h4>
                    <p class="mb-4 text-secondary"> <?= $nama_masjid; ?> berkomitmen untuk membangun kerukunan antarumat beragama dan menjadi pusat pembelajaran yang bermanfaat bagi masyarakat.</p>
                    <a href="" class="btn btn-primary py-2 px-4">Donasi Sekarang</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item mt-5">
                    <h4 class="text-light mb-4">Masjid Kami</h4>
                    <div class="d-flex flex-column">
                        <h6 class="text-secondary mb-0">Alamat Kami</h6>
                        <div class="d-flex align-items-center border-bottom py-4">
                            <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i class="fa fa-map-marker-alt text-dark"></i></span>
                            <a href="" class="text-body"><?= $alamat; ?></a>
                        </div>
                        <h6 class="text-secondary mt-4 mb-0">No. Telepon Kami</h 6>
                        <div class="d-flex align-items-center py-4">
                            <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i class="fa fa-phone-alt text-dark"></i></span>
                            <a href="" class="text-body"><?= $kontak; ?></a>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item mt-5">
                            <h4 class="text-light mb-4">Explore Link</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="text-body mb-2" href="<?= base_url('/') ?>"><i class="fa fa-check text-primary me-2"></i>Home</a>
                                <a class="text-body mb-2" href="<?= base_url('/about') ?>"><i class="fa fa-check text-primary me-2"></i>About</a>
                                <a class="text-body mb-2" href="<?= base_url('/activity') ?>"><i class="fa fa-check text-primary me-2"></i>Aktifitas</a>
                                <a class="text-body mb-2" href="<?= base_url('/contact') ?>"><i class="fa fa-check text-primary me-2"></i>Kontak</a>
                                <a class="text-body mb-2" href="<?= base_url('/blog') ?>"><i class="fa fa-check text-primary me-2"></i>Blog</a>
                                <a class="text-body mb-2" href="<?= base_url('/event') ?>"><i class="fa fa-check text-primary me-2"></i>Acara</a>
                                <a class="text-body mb-2" href="<?= base_url('/comingsoon') ?>"><i class="fa fa-check text-primary me-2"></i>Donasi</a>
                                <a class="text-body mb-2" href="<?= base_url('/sermons') ?>"><i class="fa fa-check text-primary me-2"></i>Kajian</a>
                            </div>
                                
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-6 col-xl-3">
                        <div class="footer-item mt-5">
                            <h4 class="text-light mb-4">Kajian Online</h4>
                            <div class="d-flex border-bottom border-secondary py-4">
                                <img src="img/blog-mini-1.jpg" class="img-fluid flex-shrink-0" alt="">
                                <div class="ps-3">
                                    <p class="mb-0 text-muted">Tauhid</p>
                                    <a href="<?= base_url('/sermons') ?>" class="text-body">Kumpulan Kajian </a>
                                </div>
                            </div>
                            <div class="d-flex py-4">
                                <img src="img/blog-mini-2.jpg" class="img-fluid flex-shrink-0" alt="">
                                <div class="ps-3">
                                    <p class="mb-0 text-muted">Fiqih</p>
                                    <a href="" class="text-body">Kumpulan Kajian </a>
                                </div>
                            </div>
                            <div class="d-flex border-bottom border-secondary py-4">
                                <img src="img/blog-mini-1.jpg" class="img-fluid flex-shrink-0" alt="">
                                <div class="ps-3">
                                    <p class="mb-0 text-muted">Tauhid</p>
                                    <a href="<?= base_url('/sermons') ?>" class="text-body">Kumpulan Kajian </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container py-4">
                <div class="border-top border-secondary pb-4"></div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#"><?= $nama_masjid; ?></a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://zalfyan.my.id">zalfyan</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-light back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="<?= base_url('js/main.js') ?>"></script>

    </body>

</html>