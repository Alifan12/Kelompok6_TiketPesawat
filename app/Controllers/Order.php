<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Order extends Controller
{
    public function index()
    {
        echo view('Order');
    }
}
