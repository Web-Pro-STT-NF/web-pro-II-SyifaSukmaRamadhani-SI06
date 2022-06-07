<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class DosenSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nidn'               => '4502101',
                'nama'              => 'Misna Asqia S.Kom',
                'jenis_kelamin'     => 'Perempuan',
                'tgl_lahir'         => '1985-06-01',
                'tempat_lahir'      => 'Cirebon',
                'pendidikan_akhir'     => 'S1',
                'kode_prodi'        => '10',
                'created_at'        => Time::now()
            ],
            [
                'nidn'               => '2312102',
                'nama'              => 'Sirojul Munir',
                'jenis_kelamin'     => 'Laki-Laki',
                'tgl_lahir'         => '1987-03-01',
                'tempat_lahir'      => 'Depok',
                'pendidikan_akhir'     => 'S2',
                'kode_prodi'        => '20',
                'created_at'        => Time::now()
            ],
        ];
        $this->db->table('dosen')->insertBatch($data);
    }
}
