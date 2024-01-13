<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksiDetailTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idtransaksidetail' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_transaksi' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'id_harga' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'kelompok_penumpang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_penumpang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('idtransaksidetail', true);
        $this->forge->createTable('transaksi_detail');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_detail');
    }
}
