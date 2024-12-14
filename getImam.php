<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "sidakaton";
$dbname = "masjid_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data imam berdasarkan waktu sholat
$sql = "SELECT waktu_sholat, imam FROM jadwal_imam";
$result = $conn->query($sql);

$imamData = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $imamData[$row['waktu_sholat']] = $row['imam'];
    }
} else {
    $imamData = [];
}

$conn->close();


?>
