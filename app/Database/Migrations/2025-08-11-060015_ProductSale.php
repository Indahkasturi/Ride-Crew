<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductSale extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'product_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'product_image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'product_price' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'product_category' => [
                'type'       => 'ENUM',
                'constraint' => ['sale', 'rent'],
                'default'    => 'sale',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ProductSale');
    }

    public function down()
    {
        $this->forge->dropTable('ProductSale');
    }
}
