<?php

namespace App\Controllers;

class MetodebayarControl extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('metode_pembayaran');
        $query   = $builder->get();  // Produces: SELECT * FROM mytable
        return view('MetodePembayaran.php');
    }
    // public function Ambil(){
    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('metode_pembayaran');
    //     $query   = $builder->get();  // Produces: SELECT * FROM mytable
    //     return view('MetodePembayaran.php');
    // }

    public function Show()
    {
        $request    = \Config\Services::request();
        $db      = \Config\Database::connect();
        $builder = $db->table('transaksi');
        $builder->select('*');
        $builder->join('transaksi_detail', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->join('harga', 'harga.id_harga = transaksi_detail.id_harga_harga');
        $builder->join('penerbangan', 'harga.id_penerbangan = penerbangan.id');
        $builder->where('id_harga', $_POST['id_harga']);
        $query = $builder->get()->getResult('array');
        $data['tampil'] = $query;
        return view('MetodePembayaran', $data);
    }
}
