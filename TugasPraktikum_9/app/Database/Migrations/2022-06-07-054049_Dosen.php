<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'nidn'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'nama'                  => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'jenis_kelamin'         => [
                'type'              => 'ENUM',
                'constraint'        => "'Laki-Laki', 'Perempuan'"
            ],
            'tgl_lahir'             => [
                'type'              => 'DATETIME',
            ],
            'tempat_lahir'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'pendidikan_akhir'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'kode_prodi'                    => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'created_at'            => [
                'type'              => 'TIMESTAMP',
                'null'              => true,
                'on update'         => 'NOW()'
            ],
            'updated_at'            => [
                'type'              => 'TIMESTAMP',
                'null'              => true,
                'on update'         => 'NOW()'
            ],
        ]);
        $this->forge->addPrimaryKey('nidn', true);
        $this->forge->createTable('dosen');
    }

    public function down()
    {
        $this->forge->dropTable('dosen');
    }
}
