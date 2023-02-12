<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travel_packages')->insert([
            [
                'id' => '1',
                'title'             => 'Deratan',
                'location'          => 'Deratan, Bali',
                'country'           => 'Indonesia',
                'type'              => 'Vacation',
                'departure_date'    => '2022-03-22',
                'price'             => '80',
                'language'          => 'Bahasa Indonesia',
                'foods'             => 'Local Foods',
                'duration'          => '4D',
                'featured_event'    => 'Tari Kecak',
                'slug'              => 'deratan',
                'about'             => "Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby island of Bali.

Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali."
            ],
            [
                'id' => '2',
                'title'             => 'Bromo',
                'location'          => 'Bromo, Malang',
                'country'           => 'Indonesia',
                'type'              => 'Hiking',
                'departure_date'    => '2023-03-22',
                'price'             => '30',
                'language'          => 'Bahasa Indonesia',
                'foods'             => 'Noodles',
                'duration'          => '2D',
                'featured_event'    => 'Sunset',
                'slug'              => 'bromo-mountain',
                'about'             => "Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby island of Bali.

Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali."
            ],
            [
                'id' => '3',
                'title'             => 'Nusa Penida',
                'location'          => 'Nusa Penida',
                'country'           => 'Indonesia',
                'type'              => 'Swimming',
                'departure_date'    => '2023-03-22',
                'price'             => '90',
                'language'          => 'Bahasa Indonesia',
                'foods'             => 'Local Foods',
                'duration'          => '5D',
                'featured_event'    => 'Tari Kecak',
                'slug'              => 'nusa-penida',
                'about'             => "Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby island of Bali.

Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali."
            ],
            [
                'id' => '4',
                'title'             => 'Tower Dubai',
                'location'          => 'Dubai',
                'country'           => 'Middle East',
                'type'              => 'Vacation',
                'departure_date'    => '2023-03-22',
                'price'             => '1500',
                'language'          => 'English',
                'foods'             => 'Local Foods',
                'duration'          => '7D',
                'featured_event'    => 'Murratal',
                'slug'              => 'dubai',
                'about'             => "Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby island of Bali.

Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali."
            ],
        ]);

        DB::statement("SELECT setval('travel_packages_id_seq', 5)");
    }
}
