<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MerekLaptop extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nama_merek' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ]
            ]);
            $this->forge->addKey('nama_merek', true);
            $this->forge->createTable('merek_laptop');
    }

    public function down()
    {
        $this->forge->dropTable('merek_laptop');
    }
}
