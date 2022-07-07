<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        return view('vw_register/index');
    }
    public function process()
    {
        $users = new UsersModel();
        $users->save([
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'email' => $this->request->getVar('email'),
            'status' => $this->request->getVar('status'),
            'role' => $this->request->getVar('role'),
        ]);
        return redirect()->to('daftar');
    }
}
