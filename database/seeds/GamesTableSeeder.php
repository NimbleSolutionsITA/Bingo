<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                "status" => 'available',
                "start_time" => Carbon::now()->addDay(),
            ],
            [
                "status" => 'available',
                "start_time" => Carbon::now()->addWeek(),
            ],
            [
                "status" => 'available',
                "start_time" => Carbon::now()->addMonth(),
            ]
        ]);
    }
}
