<?php

namespace App\Controllers;

use App\Models\KasMasukModel;
use App\Models\EventModel;

class JumlahdonasiController extends BaseController
{
    public function index()
    {
        $kasModel = new KasMasukModel();
        $eventModel = new EventModel();

        // Ambil total donasi dari tabel kas_masuk
        $totalDonasi = $kasModel->selectSum('jumlah')->get()->getRow()->jumlah;

        // Hitung jumlah acara dari tabel event
        $jumlahAcara = $eventModel->countAll();

        // Kirim data ke view
        return view('jumlahdonasi/dashboard', [
            'totalDonasi' => $totalDonasi,
            'jumlahAcara' => $jumlahAcara,
            'events' => $eventModel->findAll()
        ]);
    }
}
