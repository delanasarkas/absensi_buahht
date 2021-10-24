<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id_users';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_role', 'id_divisi', 'nik', 'email' , 'username', 'alamat', 'no_tlp', 'password', 'is_active', 'created_at', 'updated_at'];
}