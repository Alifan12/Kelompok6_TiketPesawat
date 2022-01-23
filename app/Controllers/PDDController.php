<?php

namespace App\Controllers;

class PDDController extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('maskapai');
        $builder->select('*');
        $builder->join('pesawat', 'maskapai.id = pesawat.id_maskapai');
        $builder->join('penerbangan', 'pesawat.id = penerbangan.id_pesawat');
        $builder->join('harga', 'harga.id_penerbangan = penerbangan.id');
        $builder->join('transaksi_detail', 'transaksi_detail.id_harga_harga=harga.id_harga');
        $query = $builder->get()->getResult();
        $data['tampil']=$query;
        return view('DetailPemesanPenumpang',$data);
    }
    public function Ambil(){
        $request    = \Config\Services::request();
        $db      = \Config\Database::connect();
        $builder = $db->table('maskapai');
        $builder->select('*');
        $builder->join('pesawat', 'maskapai.id = pesawat.id_maskapai');
        $builder->join('penerbangan', 'pesawat.id = penerbangan.id_pesawat');
        $builder->join('harga', 'harga.id_penerbangan = penerbangan.id');
        $builder->where('id_harga',$_POST['id_harga']);
        $query = $builder->get()->getResult('array');
        $data['tampil']=$query;
        return view('DetailPemesanPenumpang',$data);
    }
    public function metode()
    {
        return view('MetodePembayaran');
    }

}
