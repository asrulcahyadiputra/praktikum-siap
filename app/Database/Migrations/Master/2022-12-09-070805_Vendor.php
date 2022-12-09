<?php

namespace App\Database\Migrations\Master;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Vendor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'vendor_id' => [
                'type'          => 'VARCHAR',
                'constraint'    => 20,
            ],
            'vendor_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'vendor_address' => [
                'type'          => 'VARCHAR',
                'constraint'    => 150,
            ],
            'created_at'    => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP')
            ],
            'updated_at'    => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')
            ],

        ]);

        $this->forge->addKey('vendor_id', true);
        $this->forge->createTable('vendors');
    }

    public function down()
    {
        $this->forge->dropTable('vendors');
    }
}
