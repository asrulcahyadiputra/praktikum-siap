<?php

namespace App\Database\Migrations\Master;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Departments extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'department_id'     => [
                'type'              => 'INT',
                'constraint'        => 5,
                'auto_increment'    => true,
                'unsigned'          => true
            ],
            'department_name'   => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
                'null'          => false,
            ],
            'created_at'        => [
                'type'          => 'TIMESTAMP',
                'default'       => new RawSql('CURRENT_TIMESTAMP')
            ],
            'updated_at'        => [
                'type'  => 'TIMESTAMP',
                'default'       => new RawSql('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')
            ]
        ]);

        $this->forge->addKey('department_id', true);
        $this->forge->createTable('departments', true);
    }

    public function down()
    {
       $this->forge->dropTable('departments');
    }
}
