<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Wisata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wisata = [
            [
                'title' => 'Curug Beng-beng',
                'categorie' => 'Curug',
                'location' => 'Cipatujah',
                'picture' => '1.jpg',
            ],
            [
                'title' => 'Wiewdeck Galunggung',
                'categorie' => 'Pegunungan',
                'location' => 'Galunggung',
                'picture' => '2.jpg',
            ],
            [
                'title' => 'Pantai Karang Tawulan',
                'categorie' => 'Pantai',
                'location' => 'Cimanuk,Kec Cikalong',
                'picture' => '3.jpg',
            ],
            [
                'title' => 'Curug Panetean',
                'categorie' => 'Curug',
                'location' => 'Pangilaran,kec Pancatengah',
                'picture' => '4.jpg',
            ],
            [
                'title' => 'Tonjong Canyon',
                'categorie' => 'Sungai',
                'location' => 'Tanjungsari,Cipatujah',
                'picture' => '5.jpg',
            ],
        ];
        // foreach ($wisata as $key => $value) {
        //     Wisata::create($value);
        // }
    }
}
