<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table            = 'kegiatan';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id', 'judul','kapasitas', 'harga_tiket', 'tanggal', 'narasumber', 'tempat','pic', 'foto_flyer', 'jenis_id'];


}
