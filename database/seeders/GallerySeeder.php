<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'id_gallery'        => '1',
                'travel_package_id' => '1',
                'image'             => 'seeders/popular-1.jpg',
            ],
            [
                'id_gallery'        => '2',
                'travel_package_id' => '2',
                'image'             => 'seeders/popular-2.jpg',
            ],
            [
                'id_gallery'        => '3',
                'travel_package_id' => '3',
                'image'             => 'seeders/popular-3.jpg',
            ],
            [
                'id_gallery'        => '4',
                'travel_package_id' => '4',
                'image'             => 'seeders/popular-4.jpg',
            ]
        ]);

        DB::statement("SELECT setval('galleries_id_gallery_seq', 5)");
    }
}
