<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Gallery extends Seeder
{
    public function run()
    {
        $data =[
            [
                'name' => 'Curug Ciherang',
                'Date' => '2010-02-25',
                'image' => 'https://autoride.co.id/wp-content/uploads/2021/08/Air-terjun.jpg',
            ],
            [
                'name' => 'Pulau Bira',
                'Date' => '2011-03-15',
                'image' => 'https://autoride.co.id/wp-content/uploads/2021/08/Pulau-Bira.jpg',
            ],
            [
                'name' => 'Curug Cibaliung',
                'Date' => '2012-04-10',
                'image' => 'https://autoride.co.id/wp-content/uploads/2021/08/Curug-Cibaliung.jpg',
            ],
             [
                'name' => 'Gunung Pancar',
                'Date' => '2012-04-10',
                'image' => 'https://autoride.co.id/wp-content/uploads/2021/08/Gunung-Pancar.jpg',
            ],
        ];

        $this->db->table('Gallery')->insertBatch($data);
    }
}
