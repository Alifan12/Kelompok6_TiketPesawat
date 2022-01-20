<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class EtiketController extends Controller
{
    public function index()
    {
        echo view('/Etiket.php');
    }
}