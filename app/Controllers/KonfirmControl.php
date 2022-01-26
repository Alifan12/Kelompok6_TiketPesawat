<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\transaksiModel;
use App\Models\transaksidetailModel;
use App\Models\maskapaiModel;

class KonfirmCOntrol extends Controller
{
    public function delete()
    { 
        //REFUND
        //Hapus data transaksi  
        $db      = \Config\Database::connect();
        $model= new transaksiModel;
        $builder = $db->table('transaksi_detail');
        $builder->select('*');
        $builder->where('transaksi_detail.id_transaksi', $_POST['transaksi']);
        $builder->where('id_transaksi', $_POST['transaksi']);
        $builder->delete();    
        
        //Hapus data transaksi
        $builder = $db->table('transaksi');
        $builder->select('*');
        $builder->where('transaksi.id', $_POST['transaksi']);
        $builder->delete();    

        return view('Homepembatalan');
    }
}
