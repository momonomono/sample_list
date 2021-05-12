<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('league_id');
            $table->integer('winner_user_id');
            $table->integer('loser_user_id');
            $table->integer('winner_point');
            $table->integer('loser_point');
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
        Schema::dropIfExists('league_results');
    }
}
