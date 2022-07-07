<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JenisKegiatanModel;

class JenisKegiatan extends BaseController
{
    protected $jenis_kegiatan;

    function __construct()
    {
        $this->jenis_kegiatan = new JenisKegiatanModel();
    }

    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to(site_url('login'));
        }
        $data['jenis_kegiatan'] = $this->jenis_kegiatan->findAll();
        $data['title'] = 'Jenis Kegiatan';
        echo view('tamplate/header', $data);
        echo view('jenis_kegiatan/index', $data);
        echo view('tamplate/footer', $data);
        // dd($data);
    }

    public function create()
    {
        $data['title'] = 'Jenis Kegiatan';
        echo view('tamplate/header', $data);
        echo view('jenis_kegiatan/create', $data);
        echo view('tamplate/footer', $data);
    }

    public function save()
    {
        $this->jenis_kegiatan->save([
            'nama' => $this->request->getVar('nama')
        ]);
        session()->setFlashdata('pesan', 'Jenis Kegiatan Berhasil Ditambahkan');

        return redirect()->to('/jenis_kegiatan');
    }
    public function delete($id)
    {
        $this->jenis_kegiatan->delete($id);
        session()->setFlashdata('pesan', 'Kegiatan Berhasil Dihapus');

        return redirect()->to('/jenis_kegiatan');
    }

    public function edit($id)
    {
        $data['title'] = 'Jenis Kegiatan';
        $dataKegiatan = $this->jenis_kegiatan->find($id);
        if (empty($dataKegiatan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kegiatan Tidak ditemukan !');
        }
        $data['kegiatan'] = $dataKegiatan;
        echo view('tamplate/header', $data);
        echo view('jenis_kegiatan/edit', $data);
        echo view('tamplate/footer', $data);
    }

    public function update($id)
    {
        $this->jenis_kegiatan->update($id, [
            'nama' => $this->request->getVar('nama'),
        ]);
        session()->setFlashdata('pesan', 'Kegiatan Berhasil Diupdate');
        return redirect()->to('/jenis_kegiatan');
    }
}
