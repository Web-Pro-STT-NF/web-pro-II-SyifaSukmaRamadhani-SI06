<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PordiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode' => '10',
                'nama' => 'Sistem Informasi',
                'kaprodi' => 'Amalia Rahmah ST.MT',
                'created_at' => Time::now()
            ],
            [
                'kode' => '20',
                'nama' => 'Teknik Informatika',
                'kaprodi' => 'Tiffany Nabarian S.Kom, M.T.i',
                'created_at' => Time::now()
            ]
        ];
        $this->db->table('prodi')->insertBatch($data);
    }
}
