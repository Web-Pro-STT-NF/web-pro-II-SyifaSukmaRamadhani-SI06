<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Controllers\BaseController;
use App\Models\DaftarModel;
use App\Models\JenisKegiatanModel;
use App\Models\KategoriPesertaModel;
use App\Models\KegiatanModel;

class LandingPage extends BaseController
{
    protected $jenis_kegiatan;
    protected $kegiatan;
    protected $kategori_peserta;
    protected $daftarr;

    public function __construct()
    {
        $this->jenis_kegiatan = new JenisKegiatanModel();
        $this->kegiatan = new KegiatanModel();
        $this->kategori_peserta = new KategoriPesertaModel();
        $this->daftarr = new DaftarModel();
    }
    public function index()
    {
        $data['kegiatan'] = $this->kegiatan->findAll();
        return view('landingpage/index', $data);
    }

    public function detail($id)
    {
        $data['kegiatan'] = $this->kegiatan->where(['id' => $id])->first();
        return view('landingpage/detail', $data);
    }
    public function daftar($id)
    {
        if (!session()->get('username')) {
            return redirect()->to(site_url('login'));
        }
        $data['kategori_peserta'] = $this->kategori_peserta->findAll();
        $kegiatan = $this->kegiatan->where('id', $id)->first();
        $dataSesi = [
            'id_kegiatan' => $kegiatan->id,
            'judul' => $kegiatan->judul,
            'jenis_id' => $kegiatan->jenis_id,
        ];
        session()->set($dataSesi);
        return view('landingpage/daftar', $data);
    }

    // public function berhasil()
    // {
    //     session()->setFlashdata('pesan', 'Kegiatan Berhasil Ditambahkan');
    //     return view('landingpage/berhasil');
    // }
    public function save()
    {
        $date = Time::now();
        $this->daftarr->save([
            'tanggal_daftar' => $date,
            'alasan' => $this->request->getVar('alasan'),
            'users_id' => $this->request->getVar('users_id'),
            'nosertifikat' => $this->request->getVar('nosertifikat'),
            'kegiatan_id' => $this->request->getVar('kegiatan_id'),
            'kategori_peserta_id' => $this->request->getVar('kategori_peserta_id'),
        ]);
        session()->setFlashdata('pesan', 'Kegiatan Berhasil Ditambahkan');
        return redirect()->to('daftar');
    }
}
