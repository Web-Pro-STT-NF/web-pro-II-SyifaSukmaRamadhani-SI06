<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdiModel;

class Prodi extends BaseController
{
    protected $prodi;

    public function __construct()
    {
        $this->prodi = new ProdiModel();
    }

    public function index()
    {
        $data['prodi'] = $this->prodi->findAll();
        return view('prodi/index', $data);
    }
}
