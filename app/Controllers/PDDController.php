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
        $data['tampil'] = $query;
        return view('DetailPemesanPenumpang', $data);
    }
    public function Ambil()
    {
        $request = \Config\Services::request();
        $db      = \Config\Database::connect();
        $builder = $db->table('maskapai');
        $builder->select('*');
        $builder->join('pesawat', 'maskapai.id = pesawat.id_maskapai');
        $builder->join('penerbangan', 'pesawat.id = penerbangan.id_pesawat');
        $builder->join('harga', 'harga.id_penerbangan = penerbangan.id');
        $builder->where('id_harga', $_POST['id_harga']);
        $query = $builder->get()->getResult('array');
        $data['tampil'] = $query;
        
        return view('DetailPemesanPenumpang', $data);
    }

    public function save()
    {
        $request    = \Config\Services::request();
        $db      = \Config\Database::connect();
        $db->table('transaksi_detail');
        helper(['form']);
        $data = [
            'id_transaksi'      => 'TR2',
            'id_harga_harga'    => 'P0002',
            'kelompok_penumpang' => 'Dewasa',
            'title'             => $this->request->getVar('titel'),
            'nama_penumpang'    => $this->request->getVar('nama_lengkap'),
            'NIK'               => $this->request->getVar('nik'),
            'no_telepon'        => $this->request->getVar('noTelepon')
        ];
        $db->table('transaksi_detail')->insert($data);
        return redirect()->to('/MetodebayarController');
    }
}