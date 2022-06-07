<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode'        => [
                'type'  => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
            ],
            'nama'                  => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'kaprodi'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
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
        $this->forge->addPrimaryKey('kode');
        $this->forge->createTable('prodi');
    }

    public function down()
    {
        $this->forge->dropTable('prodi');
    }
}
