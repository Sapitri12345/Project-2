<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Signin extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel() ;
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }
    function index()
    {
        return view('users/signin');
    }
    function proses()
    {
        $users      = new UsersModel();
        $username   = $this->request->getVar('username');
        $pass   = $this->request->getVar('password');
        $password = md5($pass);
        $dataUsers  = $users->where(['username' => $username])->first();
        if ($dataUsers) {
            if($password == $dataUsers->password){
                session()->set([
                    'username'  => $dataUsers->username,
                    'id'        => $dataUsers->id,
                    'role'      => $dataUsers->role,
                    'logged_in' => TRUE
                ]);
                $this->session->set('users', $dataUsers);
                if(session()->role == 'administrator') {
                    return redirect()->to(base_url('/home/create'));
                } elseif(session()->role == 'public') {
                    return redirect()->to(base_url('/home'));
                }
            }else {
                session()->setFlashdata('error', 'username dan password salah');
                return redirect()->to (base_url('/signin')); 
            }
        }
    }
}
