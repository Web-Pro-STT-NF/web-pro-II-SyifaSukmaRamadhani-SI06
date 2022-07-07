<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisKegiatanModel extends Model
{
    protected $table = 'jenis_kegiatan';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id', 'nama'];
}
