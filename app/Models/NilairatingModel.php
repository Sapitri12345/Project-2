<?php

namespace App\Models;

use CodeIgniter\Model;

class NilairatingModel extends Model
{
    protected $table = 'nilai_rating';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id', 'nama'];
}
