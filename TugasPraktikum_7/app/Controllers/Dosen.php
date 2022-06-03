<?php

namespace App\Controllers;

class Dosen extends BaseController
{
    public function index()
    {
        return view('form_dosen');
    }

    public function save()
    {
        $data['nidn'] = $this->request->getVar('nidn');
        $data['nama'] = $this->request->getVar('nama');
        $data['jenis_kelamin'] = $this->request->getVar('jenis_kelamin');
        $data['pendidikan'] = $this->request->getVar('pendidikan');
        $data['program_study'] = $this->request->getVar('program_study');
        $data['matakuliah'] = $this->request->getVar('matakuliah');
        return view('data_dosen', $data);
    }
}
