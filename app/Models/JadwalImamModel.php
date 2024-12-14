<?php
namespace App\Models;

use CodeIgniter\Model;

class JadwalImamModel extends Model
{
    protected $table = 'jadwal_imam';
    protected $primaryKey = 'id';
    protected $allowedFields = ['waktu_sholat', 'imam'];
}
