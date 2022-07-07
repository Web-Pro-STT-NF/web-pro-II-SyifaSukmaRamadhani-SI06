<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KegiatanModel;

class Kegiatan extends BaseController
{
    protected $kegiatannn;

    function __construct()
    {
        $this->kegiatannn = new KegiatanModel();
    }
    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to(site_url('login'));
        }
        $data['kegiatannn'] = $this->kegiatannn->findAll();
        echo view('tamplate/header');
        echo view('kegiatan/index', $data);
        echo view('tamplate/footer');
    }
    public function create()
    {
        echo view('tamplate/header');
        echo view('kegiatan/create');
        echo view('tamplate/footer');
    }
    public function detail($id)
    {
        $data['kegiatan_'] = $this->kegiatannn->where(['id' => $id])->first();
        echo view('tamplate/header', $data);
        echo view('kegiatan/detail', $data);
        echo view('tamplate/footer', $data);
        // dd($data);
    }

    public function save()
    {
        $file = $this->request->getFile('foto_flyer');
        $name = $file->getName();
        $file->move('../public/gambar');
        $this->kegiatannn->save([
            'judul' => $this->request->getVar('judul'),
            'kapasitas' => $this->request->getVar('kapasitas'),
            'harga_tiket' => $this->request->getVar('harga_tiket'),
            'tanggal' => $this->request->getVar('tanggal'),
            'narasumber' => $this->request->getVar('narasumber'),
            'tempat' => $this->request->getVar('tempat'),
            'pic' => $this->request->getVar('pic'),
            'foto_flyer' => $name,
            'jenis_id' => $this->request->getVar('jenis_id')
        ]);
        session()->setFlashdata('pesan', 'Kegiatan Berhasil Ditambahkan');

        return redirect()->to('/kegiatan');
    }
    public function delete($id)
    {
        $this->kegiatannn->delete($id);
        session()->setFlashdata('pesan', 'Kegiatan Berhasil Dihapus');

        return redirect()->to('/kegiatan');
    }

    public function edit($id)
    {
        $dataKegiatan = $this->kegiatannn->find($id);
        if (empty($dataKegiatan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kegiatan Tidak ditemukan !');
        }
        $data['kegiatan_'] = $dataKegiatan;
        echo view('tamplate/header');
        echo view('kegiatan/edit', $data);
        echo view('tamplate/footer');
    }

    public function update($id)
    {
        $file = $this->request->getFile('foto_flyer');
        $name = $file->getName();
        $file->move('../public/gambar');
        $this->kegiatannn->update($id, [
            'judul' => $this->request->getVar('judul'),
            'kapasitas' => $this->request->getVar('kapasitas'),
            'harga_tiket' => $this->request->getVar('harga_tiket'),
            'tanggal' => $this->request->getVar('tanggal'),
            'narasumber' => $this->request->getVar('narasumber'),
            'tempat' => $this->request->getVar('tempat'),
            'pic' => $this->request->getVar('pic'),
            'foto_flyer' => $name,
            'jenis_id' => $this->request->getVar('jenis_id')
        ]);
        session()->setFlashdata('pesan', 'Kegiatan Berhasil Diupdate');
        return redirect()->to('/kegiatan');
    }
}
