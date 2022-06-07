<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'kode';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode', 'nama', 'kaprodi'];
}
