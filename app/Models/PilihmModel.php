<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pilihm';
    protected $allowedFields = ['id', 'nama', 'gambar', 'asal', 'jamk', 'waktu', 'jamt', 'tujuan', 'harga'];
}
