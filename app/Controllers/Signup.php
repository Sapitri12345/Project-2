<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Signup extends BaseController
{
    public function index()
    {
        return view('users/signup');
    }
    function register()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == "post") {
                $users        = new UsersModel();
                $pass         = $this->request->getVar("password");
                $usersdata = [
                    "username"  => $this->request->getVar("username"),
                    "email"     => $this->request->getVar("email"),
                    "password"  => md5($pass),
                    "role"      => 'public',
                    "status"    => 1
                ];
                $users->save($usersdata);
                $session = session();
                $session->setFlashData("success", "Registrasi Berhasil");
                return redirect()->to(base_url('/home'));
        }
    }
}
