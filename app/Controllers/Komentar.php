<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomentarModel;

class Komentar extends BaseController
{
    protected $komentar;

    function __construct()
    {
        $this->komentar = new KomentarModel();
    }
    function index()
    {
        $data['komentar'] = $this->komentar->findAll();
        return view('komentar/index', $data);
    }
    function save()
    { 
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == "post") {
        $berkas = new KomentarModel();
        $berkasdata =[
            'id' => $this->request->getPost('id'),
            'isi' => $this->request->getPost('isi')
        ];
        $berkas->save($berkasdata);
        $session = session();
        $session->setFlashData("success", "Registrasi Berhasil");
        return redirect()->to(base_url('/komentar'));
    }
}
    function create()
    {
        return view('komentar/komentar_user');
    }
}
