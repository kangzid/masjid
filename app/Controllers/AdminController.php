<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KasMasukModel;
use App\Models\KasKeluarModel;
use App\Models\EventModel;
use App\Models\InformasiMasjidModel;


class AdminController extends Controller
{
    public function dashboard()
{
    $kasMasukModel = new KasMasukModel();
    $kasKeluarModel = new KasKeluarModel(); // Tambahkan model untuk kas keluar
    $eventModel = new EventModel();

    // Hitung total donasi (kas masuk)
    $totalDonasi = $kasMasukModel->selectSum('jumlah')->get()->getRow()->jumlah;

    // Hitung total kas keluar
    $totalKasKeluar = $kasKeluarModel->selectSum('jumlah')->get()->getRow()->jumlah;

    // Hitung jumlah uang real
    $jumlahUangReal = $totalDonasi - $totalKasKeluar;

    // Hitung jumlah acara
    $jumlahAcara = $eventModel->countAll();

    $data = [
        'totalDonasi' => $totalDonasi,
        'totalKasKeluar' => $totalKasKeluar,
        'jumlahUangReal' => $jumlahUangReal,
        'jumlahAcara' => $jumlahAcara,
    ];

    return view('admin/dashboard', $data);
}

    
    public function about()
    {
        $model = new InformasiMasjidModel();
        $data['informasi_masjid'] = $model->findAll();
        return view('admin/dashboardabout', $data); // Mengarahkan ke tampilan dashboardabout.php
    }
    public function update_about()
    {
        $model = new InformasiMasjidModel();
        
        // Data dari form input
        $data = [
            'nama_masjid' => $this->request->getPost('nama_masjid'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak'),
            'email' => $this->request->getPost('email'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        
        $file = $this->request->getFile('gambar'); // File gambar dari input
        $logoPath = 'img/about-logo.jpg'; // Path file logo
        
        // Validasi file jika ada
        if ($file && $file->isValid()) {
            // Periksa ukuran file (1 MB = 1048576 bytes)
            if ($file->getSize() > 1048576) {
                // Redirect dengan pesan error jika ukuran file lebih dari 1 MB
                return redirect()->to('/dashboardabout')->with('error', 'Ukuran file terlalu besar! Maksimal 1 MB.');
            }
    
            // Hapus logo lama jika ada
            if (file_exists($logoPath)) {
                unlink($logoPath);
            }
    
            // Simpan file baru
            $file->move('img', 'about-logo.jpg');
            $data['gambar'] = 'about-logo.jpg';
        }
    
        // Update data ke database
        $model->update(1, $data);
        
        // Redirect dengan pesan sukses
        return redirect()->to('/dashboardabout')->with('message', 'Informasi berhasil diperbarui.');
    }
    
    // }    public function about()
    // {
    //     $model = new InformasiMasjidModel();
    //     $data['informasi_masjid'] = $model->findAll();
    //     return view('admin/dashboardabout', $data); // Mengarahkan ke tampilan dashboardabout.php
    // }
    // public function update_about()
    // {
    //     $model = new InformasiMasjidModel();
    
    //     // Ambil data input dari form
    //     $data = [
    //         'nama_masjid' => $this->request->getPost('nama_masjid'),
    //         'alamat' => $this->request->getPost('alamat'),
    //         'kontak' => $this->request->getPost('kontak'),
    //         'email' => $this->request->getPost('email'),
    //         'deskripsi' => $this->request->getPost('deskripsi'),
    //     ];
    
    //     $file = $this->request->getFile('gambar'); // Ambil file dari input
    //     $logoPath = 'img/about-logo.jpg'; // Lokasi logo
    
    //     // Validasi file upload
    //     if ($file && $file->isValid()) {
    
    //         // Hapus logo lama jika ada
    //         if (file_exists($logoPath)) {
    //             unlink($logoPath);
    //         }
    
    //         // Simpan file baru
    //         $file->move('img', 'about-logo.jpg');
    //         $data['gambar'] = 'about-logo.jpg';
    //     }
    //         // Cek ukuran file (dalam bytes, 1 MB = 1048576 bytes)
    //         if ($file->getSize() > 1048576) {
    //             return redirect()->to('/dashboardabout')->with('error', 'Ukuran file terlalu besar! Maksimal 1 MB.');
    //         }
    //     // Update data
    //     $model->update(1, $data);
    //     return redirect()->to('/dashboardabout')->with('message', 'Informasi berhasil diperbarui');
    // }
    public function getDonationStatistics()
{
    $kasModel = new \App\Models\KasMasukModel();

    // Grupkan donasi berdasarkan bulan dan hitung total
    $donationStats = $kasModel
        ->select("MONTH(tanggal) as month, SUM(jumlah) as total")
        ->groupBy("MONTH(tanggal)")
        ->orderBy("MONTH(tanggal)")
        ->findAll();

    // Siapkan data untuk dikirim ke Chart.js
    $months = [];
    $totals = [];

    foreach ($donationStats as $stat) {
        $months[] = date('F', mktime(0, 0, 0, $stat['month'], 1)); // Nama bulan
        $totals[] = $stat['total']; // Total donasi
    }

    return $this->response->setJSON([
        'labels' => $months,
        'data' => $totals,
    ]);
}

    

}
