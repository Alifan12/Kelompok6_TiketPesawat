<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Ordertiket extends Controller
{
    public function index()
    { 
        echo view('pages/order');
    }
}
