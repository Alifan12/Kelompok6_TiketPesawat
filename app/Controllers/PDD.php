<?php

namespace App\Controllers;

class PDD extends BaseController
{
    public function index()
    {
        
        return view('DetailPemesanPenumpang');
    }
    public function metode()
    {
        return view('MetodePembayaran');
    }

}
