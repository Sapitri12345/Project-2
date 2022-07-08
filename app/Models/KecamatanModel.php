<?php

namespace App\Models;

use CodeIgniter\Model;

class KecamatanModel extends Model
{
    protected $table = 'kecamatan';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id', 'nama'];
    public function getKecamatan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
    public function saveKecamatan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function editKecamatan($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);

        return $builder->update($data);
    }
    public function deleteKecamatan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
}
