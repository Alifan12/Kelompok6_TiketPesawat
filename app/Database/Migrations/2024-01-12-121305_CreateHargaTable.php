<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHargaTable extends Migration
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
            'id_penerbangan' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'kapasitas' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('harga');
    }

    public function down()
    {
        $this->forge->dropTable('harga');
    }
}
