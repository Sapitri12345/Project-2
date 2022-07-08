<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NilairatingModel;

class Nilairating extends BaseController
{
    protected $nilai_rating;

    function __construct()
    {
        $this->nilai_rating = new NilairatingModel();
    }

    public function index()
    {
        $data['nilai_rating'] = $this->nilai_rating->findAll();
        return view('nilai_rating/index', $data);
    }
}