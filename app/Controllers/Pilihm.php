<?php

namespace App\Controllers;

use App\Controllers\PilihmModel;

class Pilihm extends BaseController
{
    public function index()
    {
        $pilihmModel = new PilihmModel(
          $pilihm = $pilihmModel ->findAll();
            dd($pilihm);
        )
        return view('Pilihm.php');
    }
}
