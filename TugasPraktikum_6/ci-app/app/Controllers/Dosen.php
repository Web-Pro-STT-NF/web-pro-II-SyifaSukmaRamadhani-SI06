<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index()
    {
        //membuat objek model mahasiswa
        $this->dsn1 = new DosenModel();
        // $dsn1 = new Dosen_model('Rizky', 'L', 'Depansar', '10-1-1996', '0110121', 'S1');
        $this->dsn1->nama = 'Rizky';
        $this->dsn1->gender = 'L';
        $this->dsn1->tmp_lahir = 'Denpasar';
        $this->dsn1->tgl_lahir = '10-1-1996';
        $this->dsn1->nidn = '0110121';
        $this->dsn1->pendidikan = 'S1';

        $this->dsn2 = new DosenModel();
        // $dsn2 = new Dosen_model('Sukma', 'P', 'Lombok', '7-11-1994', '0110118', 'S2');
        $this->dsn2->nama = 'Sukma';
        $this->dsn2->gender = 'P';
        $this->dsn2->tmp_lahir = 'Lombok';
        $this->dsn2->tgl_lahir = '7-11-1992';
        $this->dsn2->nidn = '0110145';
        $this->dsn2->pendidikan = 'S2';

        $this->dsn3 = new DosenModel();
        // $dsn2 = new Dosen_model('Sukma', 'P', 'Lombok', '7-11-1994', '0110118', 'S2');
        $this->dsn3->nama = 'Irsal';
        $this->dsn3->gender = 'L';
        $this->dsn3->tmp_lahir = 'Bedugul';
        $this->dsn3->tgl_lahir = '14-7-1989';
        $this->dsn3->nidn = '0110126';
        $this->dsn3->pendidikan = 'S1';
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;

        //return sebuah view dan mengirimkan sebuah data
        echo view('header');
        echo view('dosen/index', $data);
        echo view('footer');
    }
}
