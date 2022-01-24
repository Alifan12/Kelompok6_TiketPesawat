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

    public function Ambil()
    {
        $request    = \Config\Services::request();
        $db      = \Config\Database::connect();
        $builder = $db->table('penerbangan');
        $builder->select('*');
        $builder->join('harga', 'penerbangan.id = harga.id_penerbangan');
        $builder->join('transaksi_detail', 'harga.id = transaksi_detail.id_harga_harga');
        $builder->join('transaksi', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->where('id_harga', $_POST['id_harga']);
        $query = $builder->get()->getResult('array');
        $data['tampil'] = $query;
        return view('MetodePembayaran', $data);
    }
}