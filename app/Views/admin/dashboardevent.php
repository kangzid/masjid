<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kelola Acara</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script> <!-- Library for icons -->
    <!-- Link SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Link Bootstrap Modal (jika menggunakan Bootstrap) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    /* Agar sidebar tetap pada posisi tetap */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 256px; /* Sesuaikan dengan lebar sidebar Anda */
        background-color: white;
        box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.1);
        z-index: 10;
        display: flex;
        flex-direction: column; /* Mengatur arah flex menjadi kolom */
        justify-content: space-between; /* Memastikan ruang antara elemen */
    }

    /* Konten utama akan memiliki margin kiri untuk memberi ruang untuk sidebar */
    .main-content {
        margin-left: 256px;
        padding: 20px;
    }
    .sidebar a {
    text-decoration: none; /* Menghilangkan garis bawah */
}

</style>
</head>
<body class="flex bg-gray-100 min-h-screen">

    <!-- Sidebar -->
    <div class="sidebar">
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

    <?php
$db = \Config\Database::connect();
$events = $db->table('events')->get()->getResultArray();  // Mengambil data sebagai array
?>

<div class="main-content">
    <h1 class="text-2xl font-bold mb-4">Kelola Acara</h1>

    <!-- Tombol Tambah Acara -->
    <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block" data-bs-toggle="modal" data-bs-target="#addEventModal">
        Tambah Acara
    </button>

    <!-- Tabel Acara -->
    <table class="table-auto w-full bg-white shadow-md rounded mb-4">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">Tanggal</th>
                <th class="px-4 py-2">Waktu</th>
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Deskripsi</th>
                <th class="px-4 py-2">Gambar</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($events as $event): ?>
            <tr class="border-b">
                <td class="px-4 py-2"><?= $event['tanggal']; ?></td>
                <td class="px-4 py-2"><?= $event['waktu']; ?></td>
                <td class="px-4 py-2"><?= $event['judul']; ?></td>
                <td class="px-4 py-2"><?= $event['deskripsi']; ?></td>
                <td class="px-4 py-2">
                    <img src="/img/<?= $event['gambar']; ?>" alt="Gambar Acara" class="h-16">
                </td>
                <td class="px-4 py-2">
                    <!-- Edit Button (Modal) -->
                    <button type="button" class="text-blue-600 hover:text-blue-800 mr-2" data-bs-toggle="modal" data-bs-target="#editEventModal<?= $event['id']; ?>">Edit</button>

                    <!-- Delete Button (SweetAlert) -->
                    <a href="javascript:void(0);" class="text-red-600 hover:text-red-800" onclick="confirmDelete(<?= $event['id']; ?>)">Hapus</a>
                </td>
            </tr>

            <!-- Modal Edit Acara -->
            <div class="modal fade" id="editEventModal<?= $event['id']; ?>" tabindex="-1" aria-labelledby="editEventModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editEventModalLabel">Edit Acara</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="/admin/event/update/<?= $event['id']; ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?> <!-- Tambahkan CSRF protection -->
    <div class="mb-3">
        <label for="tanggal<?= $event['id']; ?>" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal<?= $event['id']; ?>" name="tanggal" value="<?= $event['tanggal']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="waktu<?= $event['id']; ?>" class="form-label">Waktu</label>
        <input type="time" class="form-control" id="waktu<?= $event['id']; ?>" name="waktu" value="<?= $event['waktu']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="judul<?= $event['id']; ?>" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul<?= $event['id']; ?>" name="judul" value="<?= $event['judul']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi<?= $event['id']; ?>" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi<?= $event['id']; ?>" name="deskripsi" rows="3" required><?= $event['deskripsi']; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="gambar<?= $event['id']; ?>" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="gambar<?= $event['id']; ?>" name="gambar">
        <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
        <small class="form-text text-muted">| Maksimal ukuran file: 2 MB</small>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>




<!-- Modal Add Event -->
<div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventModalLabel">Tambah Acara</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/event/create" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu</label>
                        <input type="time" class="form-control" id="waktu" name="waktu" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required onchange="validateFileSize(this)">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function validateFileSize(input) {
    const file = input.files[0];
    if (file && file.size > 2097152) { // 2 MB dalam byte
        Swal.fire({
            icon: 'error',
            title: 'Ukuran file terlalu besar!',
            text: 'Ukuran file gambar tidak boleh lebih dari 2 MB.',
        });
        input.value = ''; // Hapus file dari input
    }
}
</script>
<?php if (session()->getFlashdata('error')): ?>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '<?= session()->getFlashdata('error') ?>',
    });
</script>
<?php endif; ?>

<script>
    // SweetAlert untuk konfirmasi hapus
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data ini akan dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '/admin/event/delete/' + id;
            }
        });
    }
</script>

    <script>
        feather.replace(); // Initialize Feather icons
    </script>
</body>
</html>
