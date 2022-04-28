<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        //membuat objek model mahasiswa
        $this->mhs1 = new MahasiswaModel();
        $this->mhs1->id = 1;
        $this->mhs1->nama = "Faiz Fikri";
        $this->mhs1->nim = "010001";
        $this->mhs1->gender = "L";
        $this->mhs1->ipk = 3.85;

        $this->mhs2 = new MahasiswaModel();
        $this->mhs2->id = 2;
        $this->mhs2->nama = "Pandan Wangi";
        $this->mhs2->nim = "020001";
        $this->mhs2->gender = "P";
        $this->mhs2->ipk = 3.35;

        $list_mhs = [$this->mhs1, $this->mhs2];
        $data['list_mhs'] = $list_mhs;

        //return sebuah view dan mengirimkan sebuah data
        echo view('header');
        echo view('mahasiswa/index', $data);
        echo view('footer');
    }
}
