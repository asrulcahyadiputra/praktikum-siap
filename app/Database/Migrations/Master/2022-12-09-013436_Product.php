<?php

namespace App\Database\Migrations\Master;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
           'product_code'   => [
               'type'       => 'VARCHAR',
               'constraint' => 50,
           ],
            'product_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'product_unit' => [
                'type'  => 'VARCHAR',
                'constraint' => 100
            ],
            'product_image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => 'product-img-default.png'
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')
            ]
        ]);

        $this->forge->addKey('product_code', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
