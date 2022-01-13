<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class LoginController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
 
    public function auth()
    {
        $session=session();
        $model=new UserModel();
        $username=$this->request->getVar('username');
        $password=$this->request->getVar('password');
        $data=$model->where('username',$username)->first();
        
        if($data){
            $data_pw=$model->where('password',$password);
            $pw=$data['password'];
            $veriviy_pw = password_verify($pw,$password);

            if($data_pw){
                $session_data=[
                    'id'          =>$data['id'],
                    'nama_depan'  =>$data['nama_depan'],
                    'nama_belakang' =>$data['nama_belakang'],
                    'username'    =>$data['username'],
                    'email'       =>$data['email'],
                    'logged_in'   =>TRUE
                ];
                $session->set($session_data);
                return redirect()->to('/HomeAccController');
        
            }
            else{
                $session->setFlashdata('msg',$pw);
                return redirect()->to('LoginController');
        
            }
        }
        else{
            $session->setFlashdata('msg','Username not found');
            return redirect()->to('LoginController');
        
        }

 
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 