<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script> <!-- Library for icons -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Dashboard</h1>
        <!-- Content Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Cards Example -->
            <div class="bg-white shadow-md rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-700">Total Keuangan</h2>
    <p class="text-3xl font-bold text-blue-500 mt-2">Rp <?= number_format($jumlahUangReal, 0, ',', '.'); ?></p>
</div>

<div class="bg-white shadow-md rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-700">Jumlah Acara</h2>
    <p class="text-3xl font-bold text-green-500 mt-2"><?= $jumlahAcara; ?></p>
</div>

            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-700">Jumlah Kajian</h2>
                <p class="text-3xl font-bold text-purple-500 mt-2">3</p>
            </div>
        </div>

        <!-- Graph Section -->
        <div class="mt-8 bg-white shadow-md rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-700">Statistik Keuangan</h2>
            <canvas id="donationChart" class="mt-4" width="200" height="70"></canvas>
        </div>
    </div>

    <script>
        // Initialize icons from Feather Icons
        feather.replace();

        // URL API untuk mendapatkan data donasi
    const apiUrl = "/api/donation-statistics";

// Ambil elemen canvas
const ctx = document.getElementById('donationChart').getContext('2d');

// Fetch data dari API
fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        // Buat grafik dengan data yang diterima
        const donationChart = new Chart(ctx, {
            type: 'bar', // Jenis grafik
            data: {
                labels: data.labels, // Bulan
                datasets: [{
                    label: 'Total Donasi (Rp)',
                    data: data.data, // Total donasi
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function (value) {
                                return 'Rp ' + value.toLocaleString(); // Format angka
                            }
                        }
                    }
                }
            }
        });
    })
    .catch(error => console.error('Error fetching donation statistics:', error));
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>



