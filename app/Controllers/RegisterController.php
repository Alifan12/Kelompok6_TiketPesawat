<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class RegisterController extends Controller{
    public function index(){
        helper(['form']);
        $data=[];
        echo view('Regist',$data);
    }
    public function save(){
        helper(['form']);
        $rules=[
            'Fname'         => 'required|min_length[3]|max_length[40]',
            'Bname'         => 'required|min_length[3]|max_length[40]',
            'username'      => 'required|min_length[4]|max_length[20]',
            'password'      => 'required|min_length[4]|max_length[20]',
            
            'email'         => 'required|min_length[4]|max_length[25]|valid_email|is_unique[account.email]',
            'password'      => 'required|min_length[4]|max_length[20]',
            'confpassword'  => 'matches[password]',
            'no_telepon'    => 'required|min_length[3]|max_length[15]'
            
        ];
        if($this->validate($rules)){
            $model=new UserModel();
            $data=[
                'nama_depan'      =>$this->request->getVar('Fname'),
                'nama_belakang'   => $this->request->getVar('Bname'),
                'email'           =>$this->request->getVar('email'),
                'username'        =>$this->request->getVar('username'),
                'password'        =>$this->request->getVar('password'),

                'no_telepon'      => $this->request->getVar('no_telepon')
            ];
            $model->save($data);
            return redirect()->to('/LoginController');
        }
        else{
            $data['validation']=$this->validator;
            echo view('Regist',$data);
        }
    }
}