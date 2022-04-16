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
                'prefecture_id' => '13',
                'email' => 'exit@exit.com',
                'email_verified_at' => Carbon::now(),
                'name' => 'tanaka',
                'password' => hash::make('321tanaka'),
                'sex' => 'woman',
                'age' => '20',
                'hobby' => '釣り',
                'profile' => '細身低身長',
                'image' => 'http//:tanaka.co.jp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'prefecture_id' => '23',
                'name' => 'nakayama',
                'email' => Str::random(10).'@exit.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'sex' => 'man',
                'age' => '23',
                'hobby' => '釣り',
                'profile' => '細身低身長',
                'image' => 'http//:tanaka.co.jp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'prefecture_id' => '18',
                'name' => 'takahashi',
                'email' => Str::random(10).'@exit.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'sex' => 'none',
                'age' => '23',
                'hobby' => '釣り',
                'profile' => '細身低身長',
                'image' => 'http//:tanaka.co.jp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'prefecture_id' => '18',
                'name' => 'honda',
                'email' => Str::random(10).'@exit.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'sex' => '',
                'age' => '23',
                'hobby' => '釣り',
                'profile' => '細身低身長',
                'image' => 'http//:tanaka.co.jp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
