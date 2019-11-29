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
            $table->integer('ambo')->unsigned()->nullable()->default(0);
            $table->integer('terna')->unsigned()->nullable()->default(0);
            $table->integer('quaterna')->unsigned()->nullable()->default(0);
            $table->integer('cinquina')->unsigned()->nullable()->default(0);
            $table->integer('tombola')->unsigned()->nullable()->default(0);
            $table->string('status')->default('available');
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
