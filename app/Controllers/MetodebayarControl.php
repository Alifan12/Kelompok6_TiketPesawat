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

    // public function tampilPerjalanan()
    // {
    //     $this->request = \Config\Services::request();
    //     $session = session();
    //     $arrival = $this->request->getVar('arrival', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //     $depart = $this->request->getVar('departure', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //     $waktu_mulai = $this->request->getVar('tanggalberangkat', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //     $kelas = $this->request->getVar('kelas', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //     $model = new penerbanganModel;
    //     $data = $model->cariPenerbangan($depart, $arrival, $waktu_mulai, $kelas);
    //     return view('pages/order', $data);
    // }
}
