<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JenisWisataModel;

class JenisWisata extends BaseController
{
    protected $jenis_wisata;

    function __construct()
    {
        $this->jenis_wisata = new JenisWisataModel();
    }

    function index()
    {
        $data ['getJenisWisata'] = $this->jenis_wisata->getJenisWisata();
        $data['jeniswisata'] = $this->jenis_wisata->findAll();
        return view('jenis_wisata/index', $data);
    }
    function add()
    {
        $model = new JenisWisataModel();
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->saveJenisWisata($data);
        echo '<script>
                window.location = "'.base_url('jeniswisata').'";
            </script>';
    }
    function edit($id)
    {
        $getJenisWisata = $this->jenis_wisata->getJenisWisata($id)->getRow();
        if (isset($getJenisWisata))
        {
            $data['jeniswisata']=$getJenisWisata;
            echo view('jenis_wisata/edit',$data);
        } else {
            echo '<script>
                window.location="'.base_url('jeniswisata').'"
                </script>';
        }
    }
    function update()
    {
        $model = new JenisWisataModel();
        $id = $this->request->getPOST('id');
        $data = array('nama'=>$this->request->getPOST('nama'));
        $model->editJenisWisata($data, $id);

        echo '<script>
        window.location="'.base_url('jeniswisata').'"
        </script>';
    }
    function delete($id)
    {
        $model = new JenisWisataModel();
        $getJenisWisata = $model->getJenisWisata($id)->getRow();

        if (isset($getJenisWisata))
        {
            $model->deleteJenisWisata($id);
            echo '<script>
            alert("Data terhapus");
            window.location="'.base_url('jeniswisata').'"
            </script>';
        }else
        {
            echo '<script>
            alert("Gagalterhapus");
            window.location="'.base_url('jeniswisata').'"
            </script>';
        }
    }
    function create()
    {
        return view('jenis_wisata/create');
    }
}
