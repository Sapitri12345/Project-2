<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    protected $users;

    function __construct()
    {
        $this->users = new UsersModel();
    }

    function index()
    {
        $data['users'] = $this->users->findAll();
        return view('users/index', $data);
    }
}