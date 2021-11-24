<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'laptop_id' => [
                    'type'           => 'INT',
                    'unsigned'       => true,
                    'auto_increment' => true
            ],
            'model' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 100
            ],
            'merk' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
                    
            ],
            'processor'   => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'gpu' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'ram' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'disk' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'layar' => [
                'type'       => 'VARCHAR',
                    'constraint' => 100
            ],
            'baterai' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],

    ]);
    $this->forge->addKey('laptop_id', true);
    $this->forge->createTable('spesifikasi');
    }

    public function down()
    {
        $this->forge->dropTable('spesifikasi');
    }
}


