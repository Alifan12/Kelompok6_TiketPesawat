<?php

namespace App\Controllers;

class MetodebayarControl extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('metode_pembayaran');
        $query   = $builder->get();  // Produces: SELECT * FROM mytable
        print_r($query->getResult());
        return view('MetodePembayaran.php');
    }
}
