<?php
// Panggil file konfigurasi
require_once APPPATH . 'Config/Database.php';

use Config\Database;

// Buat instance koneksi
$db = Database::connect();

// Query data informasi masjid
$sql = "SELECT nama_masjid, alamat, kontak, email, deskripsi, gambar FROM informasi_masjid WHERE id = 1"; // Gantilah dengan ID yang sesuai
$result = $db->query($sql);

if ($result->getNumRows() > 0) {
    // Ambil data
    $row = $result->getRowArray();
    $nama_masjid = $row["nama_masjid"];
    $alamat = $row["alamat"];
    $kontak = $row["kontak"];
    $email = $row["email"];
    $deskripsi = $row["deskripsi"];
    $gambar = $row["gambar"];
} else {
    echo "Data tidak ditemukan";
}

// Ambil data imam
$sqlImam = "SELECT waktu_sholat, imam FROM jadwal_imam";
$resultImam = $db->query($sqlImam);
$imamData = [];
if ($resultImam->getNumRows() > 0) {
    foreach ($resultImam->getResultArray() as $row) {
        $imamData[$row['waktu_sholat']] = $row['imam'];
    }
}
?>