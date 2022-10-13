<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFantasyteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fantasyteams', function (Blueprint $table) {
            $table->id();
            $table->string('F_team_name');
            $table->integer('points');
            $table->integer('Budget_spent');
            $table->integer('budget_remaining');
            $table->integer('transfers_remaining');
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
        Schema::dropIfExists('fantasyteams');
    }
}
