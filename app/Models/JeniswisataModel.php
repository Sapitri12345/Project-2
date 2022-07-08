<?php

namespace App\Models;

use CodeIgniter\Model;

class JeniswisataModel extends Model
{
    protected $table = 'jenis_wisata';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id', 'nama'];
    public function getJenisWisata($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
    public function saveJenisWisata($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function editJenisWisata($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);

        return $builder->update($data);
    }
    public function deleteJenisWisata($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
}
