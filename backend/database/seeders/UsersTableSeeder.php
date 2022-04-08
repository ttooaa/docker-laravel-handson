<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
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
            'prefecture_id' => '1',
            'email' => 'exit@exit.com',
            'name' => 'tanakaa',
            'password' => hash::make('321tanaka'),
            'sex' => '1',
            'hobby' => '釣り',
            'profile' => '細身低身長',
            'image' => 'http//:tanaka.co.jp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'prefecture_id' => '2',
            'name' => Str::random(5),
            'email' => Str::random(10).'@exit.com',
            'password' => Hash::make('password'),
            'sex' => '1',
            'hobby' => '釣り',
            'profile' => '細身低身長',
            'image' => 'http//:tanaka.co.jp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
        ]);
    }
}
