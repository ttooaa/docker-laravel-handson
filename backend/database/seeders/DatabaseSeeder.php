<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            // PrefectureTableSeeder::class,
            // UsersTableSeeder::class,
            RoomsTableSeeder::class
        ]);
    }
}
