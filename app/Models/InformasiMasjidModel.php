<?php

namespace App\Models;

use CodeIgniter\Model;

class InformasiMasjidModel extends Model
{
    protected $table = 'informasi_masjid';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_masjid', 'alamat', 'kontak', 'email', 'deskripsi'];
}
