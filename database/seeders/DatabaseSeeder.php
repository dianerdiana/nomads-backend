<?php

namespace Database\Seeders;

use App\Models\TravelPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    use WithoutModelEvents;

    public function run()
    {
        $this->call([
            UserSeeder::class,
            TravelPackageSeeder::class,
            GallerySeeder::class,
        ]);
    }
}
