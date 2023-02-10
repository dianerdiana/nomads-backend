<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id_user'   => '1',
                'name'      => 'Admin',
                'username'  => 'admin',
                'email'     => 'admin@mail.com',
                'password'  => bcrypt('admin'),
                'roles'     => 'ADMIN',
            ],
            [
                'id_user'   => '2',
                'name'      => 'User',
                'username'  => 'user',
                'email'     => 'user@mail.com',
                'password'  => bcrypt('admin'),
                'roles'     => 'USER',
            ]
        ]);

        DB::statement("SELECT setval('users_id_user_seq', 2)");
    }
}
