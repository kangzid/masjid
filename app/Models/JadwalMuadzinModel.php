<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalMuadzinModel extends Model
{
    protected $table = 'jadwal_muadzin'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel
    protected $allowedFields = ['hari', 'waktu_sholat', 'muadzin']; // Kolom yang dapat diisi

    // Fungsi untuk mengambil jadwal berdasarkan hari tertentu
    public function getJadwalByHari($hari)
    {
        return $this->where('hari', $hari)->findAll();
    }

    // Fungsi untuk mengambil semua jadwal
    public function getAllJadwal()
    {
        return $this->orderBy('hari', 'ASC')->orderBy('waktu_sholat', 'ASC')->findAll();
    }
}
