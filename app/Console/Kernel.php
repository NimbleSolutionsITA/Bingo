<?php

namespace App\Console;

use App\Events\GameUpdated;
use App\Game;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        if (Schema::hasTable('games')) {
            // Get all games from the database
            $games = Game::all();
            // Go through each game to dynamically set them up.
            foreach ($games as $game) {

                $crondate = Carbon::parse($game->start_time);
                $crondate = $crondate->minute . ' ' . ($crondate->hour -1) . ' ' . $crondate->day . ' ' . $crondate->month . ' *';

                // Use the scheduler to add the task at its desired frequency
                $schedule->call(function() use ($game) {

                    if (Game::where('id', $game->id)->first()->status == 'available') {
                        // Set extraction interval in seconds
                        $interval = 5;
                        //create extraction sequence array
                        $numbers = array();
                        $sequence = array();
                        for($i = 1; $i <= 90; $i++) {
                            array_push($numbers, $i);
                        }
                        for($i = 1; $i <= 90; $i++) {
                            $extracted_num_index =  array_rand($numbers, 1);
                            $extracted_num = $numbers[$extracted_num_index];
                            unset($numbers[$extracted_num_index]);
                            array_unshift($sequence, $extracted_num);
                        }

                        //set status to in progress
                        DB::table('games')
                            ->where('id', $game->id)
                            ->update(['status' => 'in progress']);
                        broadcast(new GameUpdated( Game::where('id', $game->id)->first()));

                        sleep($interval);

                        //extract a number from numbers and remove
                        $numbers = array();
                        $winner = 0;

                        while($winner == 0 && !empty($sequence)) {
                            array_unshift($numbers, array_shift($sequence));
                            DB::table('games')
                                ->where('id', $game->id)
                                ->update(['sequence' => json_encode($numbers), 'status' => 'ambo']);
                            broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                            $newWinner = Game::where('id', $game->id)->first()->ambo;
                            if ($newWinner == 0)
                                sleep($interval);
                            else
                                break;
                        }

                        sleep($interval);

                        $winner = Game::where('id', $game->id)->first()->terna;

                        if (!empty($sequence)) {
                            DB::table('games')
                                ->where('id', $game->id)
                                ->update(['status' => 'completed']);
                            broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                            while($winner == 0 && !empty($sequence)) {
                                array_unshift($numbers, array_shift($sequence));
                                DB::table('games')
                                    ->where('id', $game->id)
                                    ->update(['sequence' => json_encode($numbers), 'status' => 'terna']);
                                broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                                $newWinner = Game::where('id', $game->id)->first()->terna;
                                if ($newWinner == 0)
                                    sleep($interval);
                                else
                                    break;
                            }

                            sleep($interval);

                            $winner = Game::where('id', $game->id)->first()->quaterna;

                            if (!empty($sequence)) {
                                DB::table('games')
                                    ->where('id', $game->id)
                                    ->update(['status' => 'completed']);
                                broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                                while($winner == 0 && !empty($sequence)) {
                                    array_unshift($numbers, array_shift($sequence));
                                    DB::table('games')
                                        ->where('id', $game->id)
                                        ->update(['sequence' => json_encode($numbers), 'status' => 'quaterna']);
                                    broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                                    $newWinner = Game::where('id', $game->id)->first()->quaterna;
                                    if ($newWinner == 0)
                                        sleep($interval);
                                    else
                                        break;
                                }

                                sleep($interval);

                                $winner = Game::where('id', $game->id)->first()->cinquina;

                                if (!empty($sequence)) {
                                    DB::table('games')
                                        ->where('id', $game->id)
                                        ->update(['status' => 'completed']);
                                    broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                                    while($winner == 0 && !empty($sequence)) {
                                        array_unshift($numbers, array_shift($sequence));
                                        DB::table('games')
                                            ->where('id', $game->id)
                                            ->update(['sequence' => json_encode($numbers), 'status' => 'cinquina']);
                                        broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                                        $newWinner = Game::where('id', $game->id)->first()->cinquina;
                                        if ($newWinner == 0)
                                            sleep($interval);
                                        else
                                            break;
                                    }

                                    sleep($interval);

                                    $winner = Game::where('id', $game->id)->first()->tombola;

                                    if (!empty($sequence)) {
                                        DB::table('games')
                                            ->where('id', $game->id)
                                            ->update(['status' => 'completed']);
                                        broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                                        while($winner == 0 && !empty($sequence)) {
                                            array_unshift($numbers, array_shift($sequence));
                                            DB::table('games')
                                                ->where('id', $game->id)
                                                ->update(['sequence' => json_encode($numbers), 'status' => 'tombola']);
                                            broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                                            $newWinner = Game::where('id', $game->id)->first()->tombola;
                                            if ($newWinner == 0)
                                                sleep($interval);
                                            else
                                                break;
                                        }
                                    }
                                }
                            }
                        }
                        DB::table('games')
                            ->where('id', $game->id)
                            ->update(['status' => 'completed']);
                        broadcast(new GameUpdated( Game::where('id', $game->id)->first()));
                    }
                })->cron($crondate);
            }
        }
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
