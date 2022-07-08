<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TempatWisataModel;

class TempatWisata extends BaseController
{
    protected $tempat_wisata;

    function __construct()
    {
        $this->tempat_wisata = new TempatWisataModel();
    }

    function index()
    {

        $data['tempat_wisata'] = $this->tempat_wisata->findAll();
        return view('tempat_wisata/index', $data);
    }
    
    
}
