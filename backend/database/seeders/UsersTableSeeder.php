<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'prefecture_id' => '1',
            'email' => 'exit@exit.com',
            'password' => '321tanaka',
            'sex' => '1',
            'name' => 'tanaka',
            'hobby' => '釣り',
            'profile' => '細身低身長',
            'image' => 'http//:tanaka.co.jp'
        ]);
    }
}
