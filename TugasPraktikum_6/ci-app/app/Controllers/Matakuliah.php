<?php

namespace App\Controllers;

use App\Models\MatakuliahModel;

class Matakuliah extends BaseController
{
    public function index()
    {
        //membuat objek model mahasiswa
        $this->mk1 = new MatakuliahModel();
        $this->mk1->nama = 'Basis Data';
        $this->mk1->sks = 4;
        $this->mk1->kode = 20;

        $this->mk2 = new MatakuliahModel();
        $this->mk2->nama = 'Pemrograman Web';
        $this->mk2->sks = 2;
        $this->mk2->kode = 15;

        $list_mk = [$this->mk1, $this->mk2];
        $data['list_mk'] = $list_mk;

        //return sebuah view dan mengirimkan sebuah data
        echo view('header');
        echo view('matakuliah/index', $data);
        echo view('footer');
    }
}
