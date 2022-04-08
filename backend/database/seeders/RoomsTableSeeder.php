<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'host_id' => '1',
            'title' => 'お話しましょ',
            'genre' => '誰でも可',
            'detail' => 'よろしくたのんます！',
            'start_time' => new Carbon('2022-04-09 0:30:00'),
            'end_time' => new Carbon('2022-04-09 1:00:00'),
            'number_of_people' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
