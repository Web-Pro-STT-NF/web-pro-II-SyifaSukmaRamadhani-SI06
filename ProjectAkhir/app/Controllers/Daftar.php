<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DaftarModel;

class Daftar extends BaseController
{
    protected $daftar;

    function __construct()
    {
        $this->daftar = new DaftarModel();
    }

    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to(site_url('login'));
        }
        $dataid = session()->get('id');
        $data['daftar'] = $this->daftar->where(['users_id' => $dataid])->findAll();
        $data['title'] = 'Daftar';
        echo view('tamplate/header', $data);
        echo view('daftar/index', $data);
        echo view('tamplate/footer', $data);
        // dd($data);
    }
    public function create()
    {
        $data['title'] = 'Daftar';
        echo view('tamplate/header', $data);
        echo view('daftar/create', $data);
        echo view('tamplate/footer', $data);
    }
    public function save()
    {
        $this->daftar->save([
            'tanggal_daftar' => $this->request->getVar('tanggal_daftar'),
            'alasan' => $this->request->getVar('alasan'),
            'users_id' => $this->request->getVar('users_id'),
            'nosertifikat' => $this->request->getVar('nosertifikat'),
            'kegiatan_id' => $this->request->getVar('kegiatan_id'),
            'kategori_peserta_id' => $this->request->getVar('kategori_peserta_id'),
        ]);
        session()->setFlashdata('pesan', 'Daftar Event Berhasil Ditambahkan');

        return redirect()->to('/daftar');
    }

    public function delete($id)
    {
        $this->daftar->delete($id);
        session()->setFlashdata('pesan', 'Daftar Event Berhasil Dihapus');

        return redirect()->to('/daftar');
    }
    public function edit($id)
    {
        $daftarr = $this->daftar->find($id);
        if (empty($daftarr)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Event Tidak ditemukan !');
        }
        $data['daftar_'] = $daftarr;
        $data['title'] = 'Daftar';
        echo view('tamplate/header', $data);
        echo view('daftar/edit', $data);
        echo view('tamplate/footer', $data);
    }

    public function update($id)
    {
        $this->daftar->update($id, [
            'tanggal_daftar' => $this->request->getVar('tanggal_daftar'),
            'alasan' => $this->request->getVar('alasan'),
            'users_id' => $this->request->getVar('users_id'),
            'nosertifikat' => $this->request->getVar('nosertifikat'),
            'kegiatan_id' => $this->request->getVar('kegiatan_id'),
            'kategori_peserta_id' => $this->request->getVar('kategori_peserta_id'),
        ]);
        session()->setFlashdata('pesan', 'Daftar Event Berhasil Diupdate');
        return redirect()->to('/daftar');
    }
}
