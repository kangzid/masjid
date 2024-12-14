<?php

namespace App\Models;

use CodeIgniter\Model;

class KritikSaranModel extends Model
{
    protected $table = 'kritik_saran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'subjek', 'pesan', 'created_at'];
}
