<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Review extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = [
            [
                'id_user' => 6,
                'id_wisata' => 'not_real',
                'name' => 'Muhammad Rizal Bimantoro',
                'desc' => 'Website ini cukup membantu saya saat mempersiapkan pesta pernikahan, saya jadi tidak bingung lagi mengenai tema apa yang harus saya pakai di pernikahan saya',
                'show' => 'yes',
                'picture' => 'user5.jpg',
            ],
            [
                'id_user' => 5,
                'id_wisata' => 'not_real',
                'name' => 'Pradita Cahyani',
                'desc' => 'Amazing website!',
                'show' => 'no',
                'picture' => 'user4.jpg',
            ],
            [
                'id_user' => 2,
                'id_wisata' => 'not_real',
                'name' => 'Tiara Dwi Syaputri',
                'desc' => 'Website ini memberikan beragam pilihan terkait apa yang harus disiapkan saat menggelar pernikahan. Mantap. Terimakasih. Semoga website ini terus berkembang lagi dan lagi!',
                'show' => 'yes',
                'picture' => 'user3.jpg',
            ]
        ];

        // foreach ($review as $key => $value) {
        //     Review::create($value);
        // }
    }
}
