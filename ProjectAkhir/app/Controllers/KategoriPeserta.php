<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriPesertaModel;

class KategoriPeserta extends BaseController
{
    protected $kategori_peserta;

    function __construct()
    {
        $this->kategori_peserta = new KategoriPesertaModel();
    }

    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to(site_url('login'));
        }
        $data['kategori_peserta'] = $this->kategori_peserta->findAll();
        echo view('tamplate/header');
        echo view('kategori_peserta/index', $data);
        echo view('tamplate/footer');
        // dd($data);
    }

    public function create()
    {
        echo view('tamplate/header');
        echo view('kategori_peserta/create');
        echo view('tamplate/footer');
    }

    public function save()
    {
        $this->kategori_peserta->save([
            'nama' => $this->request->getVar('nama')
        ]);
        session()->setFlashdata('pesan', 'Nama Kategori Berhasil Ditambahkan');

        return redirect()->to('/kategori_peserta');
    }
    public function delete($id)
    {
        $this->kategori_peserta->delete($id);
        session()->setFlashdata('pesan', 'Kategori Berhasil Dihapus');

        return redirect()->to('/kategori_peserta');
    }

    public function edit($id)
    {
        $dataKategori = $this->kategori_peserta->find($id);
        if (empty($dataKategori)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kategori Tidak ditemukan !');
        }
        $data['kategori'] = $dataKategori;
        echo view('tamplate/header');
        echo view('kategori_peserta/edit', $data);
        echo view('tamplate/footer');
    }

    public function update($id)
    {
        $this->kategori_peserta->update($id, [
            'nama' => $this->request->getVar('nama'),
        ]);
        session()->setFlashdata('pesan', 'Kategori Berhasil Diupdate');
        return redirect()->to('/kategori_peserta');
    }
}
