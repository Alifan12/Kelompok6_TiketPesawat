<?php

namespace App\Controllers;

class Refund extends BaseController
{
    public function gotrefund()
    {
        $request = \Config\Services::request();
        $db      = \Config\Database::connect();
        $builder = $db->table('account');
        $builder->select('*');
        $builder->join('transaksi', 'transaksi.id_account = account.id');
        $builder->join('transaksi_detail', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->join('harga', 'harga.id_harga = transaksi_detail.id_harga_harga');
        $builder->join('penerbangan', 'penerbangan.id = harga.id_penerbangan');
        $builder->join('pesawat','pesawat.id=penerbangan.id_pesawat');
        $builder->join('maskapai','maskapai.id=pesawat.id_maskapai');
        $builder->where('id_transaksi', $_POST['id_transaksi']);
        $query = $builder->get()->getResult('array');
        $data['tampil'] = $query;
        // dd($data);
        return view('refund.php',$data);
    }
    public function delete(){
        
        $model=new transaksiModel();

        $db      = \Config\Database::connect();
        $builder = $db->table('transaksi');
        $builder->select('*');
        $builder->join('transaksi_detail', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->join('harga', 'harga.id_harga = transaksi_detail.id_harga_harga');
        $builder->join('penerbangan', 'harga.id_penerbangan = penerbangan.id');
        $builder->where('id_harga', $_POST['id_harga']);
        $query = $builder->get()->getResult('');
        $data['tampil'] = $query;

            $data=[
                'nama_depan'      =>$this->request->getVar('Fname'),
                'nama_belakang'   =>$this->request->getVar('Bname'),
                'email'           =>$this->request->getVar('email'),
                'username'        =>$this->request->getVar('username'),
                'password'        =>password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'no_telepon'      => $this->request->getVar('no_telepon')
            ];
            $model->delete($data);
            return redirect()->to('/LoginController');

    
    }
}
