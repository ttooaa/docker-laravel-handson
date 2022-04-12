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
            [
            'host_id' => '1',
            'title' => 'お話しましょ',
            'genre' => '1',
            'maximum_number_of_people' => '4',
            'number_of_people' => '4',
            'detail' => 'aaa',
            'start_time' => date('G:i',strtotime('+45 min')),
            'hold_time' => '1時間',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ],
            [
                'host_id' => '1',
                'title' => 'お話しましょ',
                'genre' => '2',
                'maximum_number_of_people' => '4',
                'number_of_people' => '4',
                'detail' => 'よろしくたのんます！',
                'start_time' => date('G:i',strtotime('+60 min')),
                'hold_time' => '15分',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
