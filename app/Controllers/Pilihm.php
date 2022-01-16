<?php

namespace App\Controllers;

use App\Models\Peraktikum5Model;

class Pilihm extends BaseController
{
    protected $data_pesawatModelModel;
    public function __construct()
    {
        $this->data_pesawatModelModel = new Data_pesawatModelModel();
    }
    public function index()
    {
        $ = $this->data_pesawatModelModel->findAll();

        $data = [
            'title' => 'pilih maskpai',
            'data_pesawat' => $data_pesawat
        ];

        return view('Pilihm', $data);
    }
}
