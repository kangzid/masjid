<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kelola Kas</title>
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
   <div class="flex-grow p-6">
    <h1 class="text-2xl font-bold mb-6">Kelola Kas</h1>
    <!-- Form Tambah Kas -->
    <div class="mb-6 bg-white shadow rounded-lg p-4">
        <h2 class="text-xl font-semibold mb-4">Tambah Transaksi</h2>
        <form action="/addKas" method="post" class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label for="tanggal" class="block text-sm font-medium">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label for="keterangan" class="block text-sm font-medium">Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label for="jumlah" class="block text-sm font-medium">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label for="jenis" class="block text-sm font-medium">Jenis</label>
                <select id="jenis" name="jenis" class="w-full p-2 border rounded" required>
                    <option value="masuk">Kas Masuk</option>
                    <option value="keluar">Kas Keluar</option>
                </select>
            </div>
            <button type="submit" class="col-span-full bg-green-500 text-white py-2 rounded hover:bg-green-600">
                Tambah Transaksi
            </button>
        </form>
    </div>

    <div class="bg-white shadow rounded-lg p-4">
    <h2 class="text-xl font-semibold mb-4">Riwayat Kas</h2>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 p-2">Tanggal</th>
                <th class="border border-gray-300 p-2">Keterangan</th>
                <th class="border border-gray-300 p-2">Jumlah</th>
                <th class="border border-gray-300 p-2">Jenis</th>
                <th class="border border-gray-300 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kas as $item): ?>
            <tr>
                <td class="border border-gray-300 p-2"><?= $item['tanggal'] ?></td>
                <td class="border border-gray-300 p-2"><?= $item['keterangan'] ?></td>
                <td class="border border-gray-300 p-2"><?= number_format($item['jumlah'], 2) ?></td>
                <td class="border border-gray-300 p-2"><?= $item['jenis'] === 'masuk' ? 'Kas Masuk' : 'Kas Keluar' ?></td>
                <td class="border border-gray-300 p-2">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded" onclick="openEditModal(<?= htmlspecialchars(json_encode($item)) ?>)">Edit</button>
                    <button class="bg-red-500 text-white px-3 py-1 rounded" onclick="confirmDelete(<?= $item['id'] ?>)">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Edit -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h3 class="text-lg font-semibold mb-4">Edit Data Kas</h3>
        <form id="editForm" method="POST">
            <input type="hidden" name="id" id="editId">
            <div class="mb-4">
                <label for="editTanggal" class="block text-sm font-medium">Tanggal</label>
                <input type="date" id="editTanggal" name="tanggal" class="w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="editKeterangan" class="block text-sm font-medium">Keterangan</label>
                <input type="text" id="editKeterangan" name="keterangan" class="w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="editJumlah" class="block text-sm font-medium">Jumlah</label>
                <input type="number" id="editJumlah" name="jumlah" class="w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="editJenis" class="block text-sm font-medium">Jenis</label>
                <select id="editJenis" name="jenis" class="w-full border-gray-300 rounded-md">
                    <option value="masuk">Kas Masuk</option>
                    <option value="keluar">Kas Keluar</option>
                </select>
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeEditModal()">Batal</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
function openEditModal(item) {
    document.getElementById('editId').value = item.id;
    document.getElementById('editTanggal').value = item.tanggal;
    document.getElementById('editKeterangan').value = item.keterangan;
    document.getElementById('editJumlah').value = item.jumlah;
    document.getElementById('editJenis').value = item.jenis;
    document.getElementById('editForm').action = `/updateKas/${item.id}`;
    document.getElementById('editModal').classList.remove('hidden');
}

function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
}


</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect to delete route with the ID
            window.location.href = `/deleteKas/${id}`;
        }
    });
}
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Ambil pesan flashdata dari server
    const message = <?= json_encode(session('message')) ?>;

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
