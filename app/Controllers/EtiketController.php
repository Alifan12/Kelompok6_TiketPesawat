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
    public function Show(){
        $request    = \Config\Services::request();
        $db      = \Config\Database::connect();
        $builder = $db->table('transaksi');
        $builder->select('*');
        $builder->join('transaksi_detail', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->join('harga', 'harga.id_harga = transaksi_detail.id_harga_harga');
        $builder->join('penerbangan', 'harga.id_penerbangan = penerbangan.id');
        $builder->join('pesawat','pesawat.id=penerbangan.id_pesawat');
        $builder->join('maskapai','maskapai.id=pesawat.id_maskapai');
        $builder->where('id_harga', $_POST['id_harga']);
        $query = $builder->get()->getResult('array');
        $data['tampil'] = $query;
        // dd($data);
        return view('Etiket', $data);
    }
}