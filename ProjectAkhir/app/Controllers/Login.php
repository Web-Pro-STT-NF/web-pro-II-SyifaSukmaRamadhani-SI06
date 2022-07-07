<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $LoginModel = new \App\Models\LoginModel();
        $login = $this->request->getVar('login');
        if ($login) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            if ($username == null or $password == null) {
                $err = 'Silahkan Masukan Username dan Password';
            }
            if (empty($err)) {
                $dataUsername = $LoginModel->where('username', $username)->first();
                if ($dataUsername['password'] != md5($password)) {
                    $err = 'Password tidak sesuai';
                }
            }
            if (empty($err)) {
                $dataSesi = [
                    'id' => $dataUsername['id'],
                    'username' => $dataUsername['username'],
                    'password' => $dataUsername['password'],
                    'role'      => $dataUsername['role']
                ];
                session()->set($dataSesi);
                return redirect()->to(site_url('daftar'));
            }
            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to('login');
            }
        }

        return view('login/index');
    }

    public function member()
    {
        return view('login/member');
    }

    public function logout()
    {
        session()->remove('username');
        session()->remove('role');
        session()->destroy();
        return redirect()->to('landingpage');
    }
}
