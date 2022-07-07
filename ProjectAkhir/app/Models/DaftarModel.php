<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table            = 'daftar';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id', 'tanggal_daftar', 'alasan', 'users_id', 'kegiatan_id', 'kategori_peserta_id', 'nosertifikat'];
}
