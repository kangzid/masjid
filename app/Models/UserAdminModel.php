<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAdminModel extends Model
{
    protected $table = 'user_admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email', 'role', 'tanggal_registrasi'];
}
