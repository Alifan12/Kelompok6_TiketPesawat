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
        $builder->join('harga', 'harga.id_penerbangan = penerbangan.id');
        $query = $builder->get()->getResult();
        print_r($query);
        $data['tampil']=$query;
        return view('pages/order',$data);
    }
}
