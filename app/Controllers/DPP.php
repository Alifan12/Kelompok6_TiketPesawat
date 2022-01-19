<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class DPP extends Controller
{
    public function index()
    {
        echo view('pages/DetailPemesanPenumpang');
    }
}
