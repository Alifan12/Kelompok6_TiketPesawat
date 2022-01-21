<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\penerbanganModel;
use App\Models\pesawatModel;
use App\Models\maskapaiModel;

class Ordertiket extends Controller
{
    public function index()
    { 
        $db      = \Config\Database::connect();
        $builder = $db->table('maskapai');
        $builder->select('*');
        $builder->join('pesawat', 'maskapai.id = pesawat.id_maskapai');
        $builder->join('penerbangan', 'pesawat.id = penerbangan.id_pesawat');
        $query = $builder->get();
        print_r($query->getResult());
        echo view('pages/order');
    }
}
