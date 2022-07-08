<?php

namespace App\Controllers;

class Home extends BaseController
{
    // admin
    function index()
    {
        return view('layout/index');
    }

    function create()
    {
        return view('dashboard/index');
    }

}
