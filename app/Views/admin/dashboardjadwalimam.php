<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kelola Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script> <!-- Library for icons -->
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
                <a href="/dasboardkas" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
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
    <!-- Konten Utama -->
    <div class="main-content">
        <div class="bg-white p-6 shadow-md rounded-lg mb-8">
            <h1 class="text-2xl font-bold mb-4">Kelola Jadwal Imam</h1>
            <form method="POST" action="/dashboardjadwalimam/update">
                <table class="table-auto w-full border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-200 text-left">
                            <th class="px-4 py-2 border">No</th>
                            <th class="px-4 py-2 border">Waktu Sholat</th>
                            <th class="px-4 py-2 border">Nama Imam</th>
                            <th class="px-4 py-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($imam)) : ?>
                            <?php foreach ($imam as $index => $row) : ?>
                                <tr>
                                    <td class="border px-4 py-2"><?= $index + 1; ?></td>
                                    <td class="border px-4 py-2"><?= esc($row['waktu_sholat']); ?></td>
                                    <td class="border px-4 py-2">
                                        <input type="text" name="imam[<?= $row['id']; ?>]" 
                                               value="<?= esc($row['imam']); ?>" 
                                               class="w-full border border-gray-300 px-2 py-1 rounded">
                                    </td>
                                    <td class="border px-4 py-2 text-center">
                                        <button type="submit" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">
                                            Simpan
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="4" class="border px-4 py-2 text-center">Data tidak tersedia</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </form>
        </div>

<!-- Jadwal Muadzin -->
<div class="bg-white p-6 shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Kelola Jadwal Muadzin</h1>
    <form method="POST" action="/dashboardjadwalmuadzin/update">
        <table class="table-auto w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Hari</th>
                    <th class="px-4 py-2 border">Waktu Sholat</th>
                    <th class="px-4 py-2 border">Nama Muadzin</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($muadzin)) : ?>
                    <?php foreach ($muadzin as $index => $row) : ?>
                        <?php
                            // Menentukan warna latar belakang berdasarkan nama hari
                            $hari = esc($row['hari']);
                            switch ($hari) {
                                case 'Senin':
                                    $bgColor = 'bg-pink-300';
                                    break;
                                case 'Selasa':
                                    $bgColor = 'bg-green-100';
                                    break;
                                case 'Rabu':
                                    $bgColor = 'bg-yellow-100';
                                    break;
                                case 'Kamis':
                                    $bgColor = 'bg-red-100';
                                    break;
                                case 'Jumat':
                                    $bgColor = 'bg-purple-100';
                                    break;
                                case 'Sabtu':
                                    $bgColor = 'bg-pink-100';
                                    break;
                                case 'Minggu':
                                    $bgColor = 'bg-indigo-200';
                                    break;
                                default:
                                    $bgColor = '';
                                    break;
                            }
                        ?>
                        <tr>
                            <td class="border px-4 py-2"><?= $index + 1; ?></td>
                            <td class="border px-4 py-2 <?= $bgColor; ?>"><?= $hari; ?></td>
                            <td class="border px-4 py-2"><?= esc($row['waktu_sholat']); ?></td>
                            <td class="border px-4 py-2">
                                <input type="text" name="muadzin[<?= $row['id']; ?>]" 
                                       value="<?= esc($row['muadzin']); ?>" 
                                       class="w-full border border-gray-300 px-2 py-1 rounded">
                            </td>
                            <td class="border px-4 py-2 text-center">
                                <button type="submit" class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600">
                                    Simpan
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="border px-4 py-2 text-center">Data tidak tersedia</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </form>
</div>

    </div>

    <script>
        feather.replace();
    </script>
</body>
</html>
