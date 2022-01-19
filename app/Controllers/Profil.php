<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Profil extends Controller
{
    public function index()
    {
        echo view('Profil');
    }
}
