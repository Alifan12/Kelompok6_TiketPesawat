<?php namespace App\Controllers;
 
use CodeIgniter\Controller;

use App\Models\UserModel;

class HomeAccController extends Controller{
    public function index(){
        $session=session();
        $model=new UserModel();
        $account=$model->findAll();
        $username=$session->get('username');
        $data=[

            'account' =>$account,
            'username' =>$username

        ];
        return view('/HomeAcc.php',$data);
    }
}