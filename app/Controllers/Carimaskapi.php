<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\maskapaiModel;


class Carimaskapi extends Controller
{
    public function index()
    {
        // $db      = \Config\Database::connect();
        // $builder = $db->table('penerbangan');
        // $builder->select('*');
        // $query = $builder->get();
        // print_r($query->getResult());
        echo view('pages/caritiket');
    }
    public function cari()
    {
        $session = session();
        $model = new penerbanganModel;

    }
}
