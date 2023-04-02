<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallMovieSeatSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hall_movie_seat_sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('hall_id');
            $table->integer('movie_id');
            $table->integer('seat_id');
            $table->integer('session_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('hall_movie_seat_sessions');
    }
}
