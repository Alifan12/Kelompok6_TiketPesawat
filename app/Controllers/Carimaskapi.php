<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;


class Carimaskapi extends Controller
{
    public function index()
    {
        echo view('pages/caritiket');
    }
}
