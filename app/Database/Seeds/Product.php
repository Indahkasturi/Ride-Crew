<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Product extends Seeder
{
    public function run()
    {
        // contoh isi data dummy
        $data = [
            [
                'product_name' => 'Helm Riding Pro',
                'product_description' => 'Helm berkualitas tinggi',
                'product_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuifaA1R21sEpB-2XwmNdK4yhKioUjYB99ZA&s',
                'product_price' => 500000,
                'product_category' => 'sale',
            ],
              [
                'product_name' => 'Helm Riding Pro',
                'product_description' => 'Helm berkualitas tinggi',
                'product_image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-25114891/mds_mds_helm_pro_rider_-_prorider_black_doff_full01_t534ua58.jpg',
                'product_price' => 500000,
                'product_category' => 'sale',
            ],
            [
               'product_name' => 'Helm Riding Pro',
                'product_description' => 'Helm berkualitas tinggi',
                'product_image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-25114891/mds_mds_helm_pro_rider_-_prorider_black_doff_full01_t534ua58.jpg',
                'product_price' => 500000,
                'product_category' => 'rent',
            ],
            [
                'product_name' => 'Perkakas',
                'product_description' => 'Sewa perlengkapan motor lengkap',
                'product_image' => 'https://yoexplore.co.id/wp-content/uploads/2019/05/perlengkapan-touring-motor-yoexplore-bikerhut-e1558946660571.jpg',
                'product_price' => 150000,
                'product_category' => 'rent',
            ],
            [
                'product_name' => 'Perlengkapan touring dan camping',
                'product_description' => 'Sewa perlengkapan motor lengkap',
                'product_image' => 'https://radarbanyumas.disway.id//upload/ce17c1972f86fe11c4523d2c7cc1056c.jpg',
                'product_price' => 150000,
                'product_category' => 'rent',
            ],
            [
                'product_name' => 'set lengkap',
                'product_description' => 'Sewa perlengkapan motor lengkap',
                'product_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpoEYcFpPAnGxcZ1J8Nr-_KCdstMwwXOsHBA&s',
                'product_price' => 150000,
                'product_category' => 'sale',
            ],
        ];

        // insert ke tabel productSale (sesuaikan nama tabel migrasi)
        $this->db->table('ProductSale')->insertBatch($data);
    }
}
