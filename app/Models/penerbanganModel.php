<?php

namespace App\Models;

use CodeIgniter\Model;

class penerbanganModel extends Model
{
    protected $table = 'penerbangan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'id_pesawat', 'waktu_berangkat','waktu_sampai','kode_bandara_asal','kode_bandara_tujuan','status_penerbangan'];
}
