<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Altertableproduct extends Migration
{
    public function up()
    {
        $fields = [
            'PhoneNumber' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'after'      => 'product_name'
            ],
        ];

        $this->forge->addColumn('productsale', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('productsale', 'PhoneNumber');
    }
}
