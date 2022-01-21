<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\penerbanganModel;


class Carimaskapi extends Controller
{
    public function index()
    {
        echo view('pages/caritiket');
    }
    public function cari()
    {
        $session = session();
        $model = new penerbanganModel;
        
    }
}
