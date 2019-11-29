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
                "sequence" => '["attendi"]',
                "start_time" => Carbon::now()->addHour()->addMinutes(2),
                "created_at" => Carbon::now()->addHour(),
                "updated_at" => Carbon::now()->addHour(),
            ],
            [
                "sequence" => '["attendi"]',
                "start_time" => Carbon::now()->addHour()->addMinutes(4),
                "created_at" => Carbon::now()->addHour(),
                "updated_at" => Carbon::now()->addHour(),
            ],
            [
                "sequence" => '["attendi"]',
                "start_time" => Carbon::now()->addHour()->addMinutes(6),
                "created_at" => Carbon::now()->addHour(),
                "updated_at" => Carbon::now()->addHour(),
            ],
            [
                "sequence" => '["attendi"]',
                "start_time" => Carbon::now()->addHour()->addDay(),
                "created_at" => Carbon::now()->addHour(),
                "updated_at" => Carbon::now()->addHour(),
            ]
        ]);
    }
}
