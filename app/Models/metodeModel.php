<?php

namespace App\Models;

use CodeIgniter\Model;

class metodeModel extends Model
{
    protected $table = 'metode_penerbangan';
    protected $allowedFields = ['id', 'jenis_pembayaran', 'metode'];
}
