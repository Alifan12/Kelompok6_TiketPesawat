<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBandaraTable extends Migration
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
            'kode_bandara' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kota' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('bandara');
    }

    public function down()
    {
        $this->forge->dropTable('bandara');
    }
}
