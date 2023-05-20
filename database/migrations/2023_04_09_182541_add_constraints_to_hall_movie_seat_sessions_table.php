<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintsToHallMovieSeatSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hall_movie_seat_sessions', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->change();
            $table->integer('status_id')->default(1)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hall_movie_seat_sessions', function (Blueprint $table) {
            //
        });
    }
}
