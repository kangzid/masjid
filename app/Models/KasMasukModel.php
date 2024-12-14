<?php

namespace App\Models;

use CodeIgniter\Model;

class KasMasukModel extends Model
{
    protected $table = 'kas_masuk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'keterangan', 'jumlah'];
}
