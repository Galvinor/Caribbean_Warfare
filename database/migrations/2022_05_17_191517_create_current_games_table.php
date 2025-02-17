<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id1');
            $table->foreignId('user_id2');
            $table->string('user1_boats');
            $table->string('user2_boats');
            $table->string('user1_slots');
            $table->string('user2_slots');
            $table->string('status');
            $table->timestamps();
            $table->foreign('user_id1')->references('id')->on('users');
            $table->foreign('user_id2')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_games');
    }
}
