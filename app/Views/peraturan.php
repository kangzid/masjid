<?php include(APPPATH . 'Views/contentDb/headerdb.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aturan Kunjungan Ke <?= $nama_masjid; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .card {
            position: relative;
            z-index: 10;
        }
        .background-section {
            position: relative;
        }
        .green-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 300px;
            background-color: #f1c152;

            z-index: 0;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Background Section -->
    <div class="background-section">
        <div class="green-bg"></div>
        <div class="text-black text-center py-12 relative z-10">
            <h1 class="text-4xl font-bold">Aturan Kunjungan Ke <?= $nama_masjid; ?></h1>
            <p class="mt-4">Berikut adalah beberapa aturan bagi pengunjung dalam mengunjungi <?= $nama_masjid; ?>.</p>
        </div>
    </div>

    <!-- Cards Section -->
    <div class="container mx-auto mt-[10px] px-4 relative z-20">
        <div class="flex flex-col md:flex-row justify-center gap-8">
            <!-- Card 1 -->
            <div class="card bg-gray-200 rounded-2xl p-6 w-full md:w-1/2 h-full flex flex-col">
                <h2 class="text-xl font-semibold mb-4 flex items-center">
                    <i class="fas fa-thumbs-up text-[#f1c152] mr-2"></i> 
                    Aktifitas Yang Boleh Dilakukan
                </h2>
                <hr class="border-t-2 border-gray-300 mb-4"> <!-- Garis di bawah judul -->
                <ul class="space-y-4 flex-grow">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Memakai Pakaian yang bersih, suci dan menutup aurat (Q.S Al-Araf: 31).</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Membawa keresek/alat penyimpanan alas kaki, kemudian membuka alas kaki ketika masuk masjid dan menyimpannya di tempat penyimpanan.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Menjaga Kebersihan Masjid, tidak meludah di sembarang tempat & Membuang sampah ke tempatnya.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Menjaga barang bawaan berharga Anda masing-masing begitu pula dengan anggota keluarga / kerabat / saudara / orang terdekat agar tidak hilang ataupun terpisah di kawasan masjid.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Mendahulukan kaki kanan ketika masuk dan panjatkan doa "Allahummaftakhlii ‘abwaaaba rahmatik".</span>
                    </li>
                </ul>
                <hr class="border-t-2 border-gray-300 my-4"> <!-- Garis di atas "Lihat Semua" -->
                <div class="text-green-500 flex justify-center items-center">
                <button onclick="showPopup('Aktivitas Yang Boleh Dilakukan')" class="flex items-center focus:outline-none">
                        Lihat Semua <i class="fas fa-external-link-alt ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card bg-gray-200 rounded-2xl p-6 w-full md:w-1/2 h-full flex flex-col">
                <h2 class="text-xl font-semibold mb-4 flex items-center">
                    <i class="fas fa-thumbs-down text-red-500 mr-2"></i> 
                    Aktivitas Yang Tidak Boleh Dilakukan
                </h2>
                <hr class="border-t-2 border-gray-300 mb-4"> <!-- Garis di bawah judul -->
                <ul class="space-y-4 flex-grow">
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>Tidak Melakukan aktifitas jual beli dimasjid (HR. Tirmidzi no. 1232).</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>Tidak Boleh melakukan selfie / wefie / pemotretan di kawasan masjid Al Hikmah yang berpotensi mengganggu aktifitas ibadah dan pengunjung lainnya.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>Tidak boleh tidur, makan dan minum dimasjid melainkan untuk tujuan i'tikaf. Jika ingin makan minum bersama (botram), dan tidur silahkan gunakan kawasan koridor luar masjid.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>Tidak boleh shalat di kawasan yang dekat dengan tempat wudhu atau toilet yang berada di basement dalam masjid.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>Tidak boleh bersyair, bernyanyi, ataupun bersuara terlalu keras dan berisik di dalam masjid.</span>
                    </li>
                </ul>
                <hr class="border-t-2 border-gray-300 my-4"> <!-- Garis di atas "Lihat Semua" -->
                <div class="text-green-500 justify-center flex items-center">
                <button onclick="showPopup('Aktivitas Yang Tidak Boleh Dilakukan')" class="flex items-center focus:outline-none">
                        Lihat Semua <i class="fas fa-external-link-alt ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Pop-up Section -->
<!-- Pop-up Section -->
<div id="popup" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm hidden z-30 flex justify-center items-center">
    <div class="bg-white rounded-2xl p-6 max-w-lg w-full shadow-lg">
        <h2 id="popupTitle" class="text-xl font-bold mb-4"></h2>
        <div id="popupContent" class="space-y-4"></div> <!-- Konten pop-up -->
        <div class="mt-6 text-right">
            <button onclick="hidePopup()" class="px-4 py-2 bg-red-500 text-white rounded-lg">Tutup</button>
        </div>
    </div>
</div>

<script>
    function showPopup(title) {
        document.getElementById('popupTitle').textContent = title;

        // Menentukan konten berdasarkan judul
        let content = '';
        if (title === 'Aktivitas Yang Boleh Dilakukan') {
            content = `
                <ul class="space-y-4 flex-grow">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Memakai Pakaian yang bersih, suci dan menutup aurat (Q.S Al-Araf: 31).</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Membawa keresek/alat penyimpanan alas kaki, kemudian membuka alas kaki ketika masuk masjid dan menyimpannya di tempat penyimpanan.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Menjaga Kebersihan Masjid, tidak meludah di sembarang tempat & Membuang sampah ke tempatnya.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Menjaga barang bawaan berharga Anda masing-masing begitu pula dengan anggota keluarga / kerabat / saudara / orang terdekat agar tidak hilang ataupun terpisah di kawasan masjid.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Mendahulukan kaki kanan ketika masuk dan panjatkan doa "Allahummaftakhlii ‘abwaaaba rahmatik".</span>
                    </li>
                </ul>
            `;
        } else if (title === 'Aktivitas Yang Tidak Boleh Dilakukan') {
            content = `
                <ul class="space-y-4 flex-grow">
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>Tidak Melakukan aktifitas jual beli dimasjid (HR. Tirmidzi no. 1232).</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>Tidak Boleh melakukan selfie / wefie / pemotretan di kawasan masjid Al Hikmah yang berpotensi mengganggu aktifitas ibadah dan pengunjung lainnya.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>Tidak boleh tidur, makan dan minum dimasjid melainkan untuk tujuan i'tikaf. Jika ingin makan minum bersama (botram), dan tidur silahkan gunakan kawasan koridor luar masjid.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>T idak boleh shalat di kawasan yang dekat dengan tempat wudhu atau toilet yang berada di basement dalam masjid.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times-circle text-red-500 mr-2"></i>
                        <span>Tidak boleh bersyair, bernyanyi, ataupun bersuara terlalu keras dan berisik di dalam masjid.</span>
                    </li>
                </ul>
            `;
        }

        document.getElementById('popupContent').innerHTML = content; // Menampilkan konten di pop-up
        document.getElementById('popup').classList.remove('hidden');
        document.getElementById('mainContent').classList.add('blur-background');
        document.getElementById('cardContent').classList.add('blur-background');
    }

    function hidePopup() {
        document.getElementById('popup').classList.add('hidden');
        document.getElementById('mainContent').classList.remove('blur-background');
        document.getElementById('cardContent').classList.remove('blur-background');
    }
</script>

</body>
</html>
