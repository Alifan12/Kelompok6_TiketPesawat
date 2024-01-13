<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePesawatTable extends Migration
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
            'kode_pesawat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_pesawat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_maskapai' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pesawat');
    }

    public function down()
    {
        $this->forge->dropTable('pesawat');
    }
}
