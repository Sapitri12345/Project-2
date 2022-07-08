<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KecamatanModel;

class Kecamatan extends BaseController
{
    protected $kecamatan;

    function __construct()
    {
        $this->kecamatan = new KecamatanModel();
    }

    function index()
    {
        $data ['getKecamatan'] = $this->kecamatan->getKecamatan();
        $data['kecamatan'] = $this->kecamatan->findAll();
        return view('kecamatan/index', $data);
    }

    function create()
    {
        return view('kecamatan/create');
    }


    function add()
    {
        $model = new KecamatanModel();
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->saveKecamatan($data);
        echo '<script>
                window.location = "'.base_url('kecamatan').'";
            </script>';
    }
    function edit($id)
    {
        $getKecamatan = $this->kecamatan->getKecamatan($id)->getRow();
        if (isset($getKecamatan))
        {
            $data['kecamatan']=$getKecamatan;
            echo view('kecamatan/edit',$data);
        } else {
            echo '<script>
                window.location="'.base_url('kecamatan').'"
                </script>';
        }
    }
    function update()
    {
        $model = new KecamatanModel();
        $id = $this->request->getPOST('id');
        $data = array('nama'=>$this->request->getPOST('nama'));
        $model->editKecamatan($data, $id);

        echo '<script>
        window.location="'.base_url('kecamatan').'"
        </script>';
    }
    function delete($id)
    {
        $model = new KecamatanModel();
        $getKecamatan = $model->getKecamatan($id)->getRow();

        if (isset($getKecamatan))
        {
            $model->deleteKecamatan($id);
            echo '<script>
            alert("Data terhapus");
            window.location="'.base_url('kecamatan').'"
            </script>';
        }else
        {
            echo '<script>
            alert("Gagalterhapus");
            window.location="'.base_url('kecamatan').'"
            </script>';
        }
    }
}
    