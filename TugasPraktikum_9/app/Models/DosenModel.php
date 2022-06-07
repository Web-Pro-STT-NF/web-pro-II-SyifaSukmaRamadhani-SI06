<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'nidn';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = ['nidn', 'nama', 'jenis_kelamin', 'tgl_lahir', 'tempat_lahir', 'pendidikan_akhir', 'kode_prodi'];
}
