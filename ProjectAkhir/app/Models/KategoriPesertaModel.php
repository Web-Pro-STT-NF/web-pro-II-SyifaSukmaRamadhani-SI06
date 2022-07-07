<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriPesertaModel extends Model
{
    protected $table = 'kategori_peserta';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id', 'nama'];
}
