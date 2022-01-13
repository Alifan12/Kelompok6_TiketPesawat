<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home.php');
    }
    public function cari()
    {
        return view('pages/caritiket.html');
    }
}