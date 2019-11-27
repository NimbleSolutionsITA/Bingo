<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('start_time');
            $table->json('sequence')->nullable();
            $table->integer('ambo')->unsigned()->nullable();
            $table->integer('terna')->unsigned()->nullable();
            $table->integer('quaterna')->unsigned()->nullable();
            $table->integer('cinquina')->unsigned()->nullable();
            $table->integer('tombola')->unsigned()->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
