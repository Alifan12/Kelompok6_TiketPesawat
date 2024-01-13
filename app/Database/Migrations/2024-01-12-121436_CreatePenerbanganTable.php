<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenerbanganTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_pesawat' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'waktu_berangkat' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'waktu_sampai' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'kode_bandara_asal' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kode_bandara_tujuan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'status_penerbangan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('penerbangan');
    }

    public function down()
    {
        $this->forge->dropTable('penerbangan');
    }
}
