<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;

class Dosen extends BaseController
{
    protected $dosen;

    function __construct()
    {
        $this->dosen = new DosenModel();
    }
    public function index()
    {
        $data['dosen'] = $this->dosen->findAll();
        return view('dosen/index', $data);
    }
}
