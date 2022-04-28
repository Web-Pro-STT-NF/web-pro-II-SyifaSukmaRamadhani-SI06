<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public $id,$nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        $predikat = ($this->ipk >= 3.75 ) ? "Cumlaude" : "Baik" ;
        return $predikat;
    }
}
