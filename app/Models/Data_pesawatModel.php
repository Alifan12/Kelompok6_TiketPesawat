<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_pesawatModel extends Model
{
    protected $table = 'data_pesawat';
    protected $allowedFields = ['id', 'nama', 'gambar', 'asal', 'jamk', 'waktu', 'jamt', 'tujuan', 'harga'];
}
