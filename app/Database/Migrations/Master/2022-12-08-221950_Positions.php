<?php

namespace App\Database\Migrations\Master;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Positions extends Migration
{
    public function up()
    {
        $this->forge->addField([
           'position_id'   => [
               'type'           => 'INT',
               'constraint'     => 11,
               'unsigned'       => true,
               'auto_increment' => true,
           ],

            'position_name' => [
                'type'         => 'VARCHAR',
                'constraint'   => 50,
                'null'         => false
            ],
            'created_at'        => [
                'type'          => 'TIMESTAMP',
                'default'       => new RawSql('CURRENT_TIMESTAMP')
            ],
            'update_at'         => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')
            ]

        ]);

        $this->forge->addKey('position_id', true);
        $this->forge->createTable('postions', true);
    }

    public function down()
    {
        $this->forge->dropTable('positions');
    }
}
