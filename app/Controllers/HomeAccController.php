<?php namespace App\Controllers;
 
use CodeIgniter\Controller;

use App\Models\UserModel;

class HomeAccController extends Controller{
    public function index(){
        $session=session();
        $model=new UserModel();
        $account=$model->findAll();
        $nama_depan=$session->get('nama_depan');
        $nama_belakang=$session->get('nama_belakang');
        $nama_lengkap=$nama_depan.' '. $nama_belakang;
        $username=$session->get('username');
        $data=[

            'account' =>$account,
            'username' =>$username,
            'nama_lengkap' =>$nama_lengkap

        ];
        return view('/HomeAcc.php',$data);
    }
    public function profile(){
        return view('/profile.php');
    }
}