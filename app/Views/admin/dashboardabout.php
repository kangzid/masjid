<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - About</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script> <!-- Library for icons -->
</head>
<body class="flex bg-gray-100 min-h-screen">

 <!-- Sidebar -->
<div class="w-64 bg-white shadow-md flex flex-col justify-between">
    <div>
        <div class="p-4 text-xl font-bold text-center text-gray-800">Admin Dashboard</div>
        <nav class="mt-6">
    <a href="/dashboard" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
        <i data-feather="home" class="mr-3"></i>
        <span>Dashboard</span>
    </a>
    <a href="/dashboardabout" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
        <i data-feather="info" class="mr-3"></i>
        <span>About</span>
    </a>
    <a href="/dashboardactivity" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
        <i data-feather="activity" class="mr-3"></i>
        <span>Aktivitas</span>
    </a>
    <a href="/dashboardevent" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
        <i data-feather="calendar" class="mr-3"></i>
        <span>Acara</span>
    </a>
    <a href="/dashboardkas" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
        <i data-feather="dollar-sign" class="mr-3"></i>
        <span>Kelola Keuangan</span>
    </a>
    <a href="/dashboardjadwalimam" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
        <i data-feather="clock" class="mr-3"></i> <!-- Ikon jam untuk Jadwal Imam -->
        <span>Jadwal Imam</span>
    </a>
    <a href="/dashboardpesan" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
        <i data-feather="mail" class="mr-3"></i> <!-- Ikon jam untuk Jadwal Imam -->
        <span>Mail</span>
    </a>
</nav>
        </div>
        <div class="p-4">
            <a href="/logout" class="flex items-center text-gray-700 hover:bg-gray-200 px-4 py-2">
                <i data-feather="log-out" class="mr-3"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>

   <!-- Main Content -->
   <div class="flex-1 p-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Edit Halaman About</h1>

 <!-- Formulir -->
<form id="aboutForm" action="/admin/update_about" method="post" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
    <table class="table-auto w-full">
        <?php foreach ($informasi_masjid as $row): ?>
        <tr>
            <td class="px-4 py-2 font-semibold">Nama Masjid</td>
            <td class="px-4 py-2">
                <input type="text" name="nama_masjid" value="<?= $row['nama_masjid']; ?>" class="w-full border rounded-lg px-3 py-2">
            </td>
        </tr>
        <tr>
            <td class="px-4 py-2 font-semibold">Alamat</td>
            <td class="px-4 py-2">
                <input type="text" name="alamat" value="<?= $row['alamat']; ?>" class="w-full border rounded-lg px-3 py-2">
            </td>
        </tr>
        <tr>
            <td class="px-4 py-2 font-semibold">Kontak</td>
            <td class="px-4 py-2">
                <input type="text" name="kontak" value="<?= $row['kontak']; ?>" class="w-full border rounded-lg px-3 py-2">
            </td>
        </tr>
        <tr>
            <td class="px-4 py-2 font-semibold">Email</td>
            <td class="px-4 py-2">
                <input type="email" name="email" value="<?= $row['email']; ?>" class="w-full border rounded-lg px-3 py-2">
            </td>
        </tr>
        <tr>
            <td class="px-4 py-2 font-semibold">Deskripsi</td>
            <td class="px-4 py-2">
                <textarea name="deskripsi" class="w-full border rounded-lg px-3 py-2"><?= $row['deskripsi']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td class="px-4 py-2 font-semibold">Logo navbar</td>
            <td class="px-4 py-2">
                <input id="gambar" type="file" name="gambar" class="w-full border rounded-lg px-3 py-2">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                <small class="form-text text-muted">| Maksimal ukuran file: 1 MB</small>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <button id="submitButton" type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg">Simpan</button>
</form>

                </div>

<!-- Tambahkan Library SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.getElementById('aboutForm').addEventListener('submit', function(event) {
    const fileInput = document.getElementById('gambar');
    const submitButton = document.getElementById('submitButton');

    // Periksa apakah ada file yang diunggah
    if (fileInput.files.length > 0) {
        const file = fileInput.files[0];

        // Jika ukuran file lebih dari 1 MB
        if (file.size > 1048576) {
            event.preventDefault(); // Batalkan pengiriman formulir

            Swal.fire({
                title: 'Peringatan!',
                text: 'Ukuran file terlalu besar! Maksimal 1 MB.',
                icon: 'error',
                confirmButtonText: 'OK'
            });

            return false;
        }
    }

    // Jika validasi berhasil, kunci tombol Simpan agar tidak diklik dua kali
    submitButton.disabled = true;
});
</script>
<!-- Tambahkan Library SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Ambil flashdata dari server
    const error = <?= json_encode(session('error')) ?>;
    const message = <?= json_encode(session('message')) ?>;

    // Tampilkan SweetAlert jika ada error
    if (error) {
        Swal.fire({
            title: 'Peringatan!',
            text: error,
            icon: 'error',
            confirmButtonText: 'OK'
        });
    }

    // Tampilkan SweetAlert jika ada pesan sukses
    if (message) {
        Swal.fire({
            title: 'Berhasil!',
            text: message,
            icon: 'success',
            confirmButtonText: 'OK'
        });
    }
});
</script>



    <script>
        // Initialize icons from Feather Icons
        feather.replace();
    </script>
</body>
</html>
