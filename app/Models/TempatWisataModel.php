<?php

namespace App\Models;

use CodeIgniter\Model;

class TempatWisataModel extends Model
{
    protected $table = 'tempat_wisata';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id', 'nama', 'alamat', 'latlong', 'jenis_id', 'skor_rating', 'harga_tiket', 'foto1', 'foto2', 'foto3', 'kecamatan_id', 'website', 'fasilitas'];
   
}
