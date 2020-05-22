<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->char('name', 30)->nullable('false');
            $table->char('surname',30)->nullable('false');
            $table->smallInteger('jersey')->nullable()->default(0);
            $table->char('position', 5)->nullable();
            $table->char('role', 5)->nullable(); 
            $table->boolean('status')->default(true);
            $table->smallInteger('team_id'); //tomorrow
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
        Schema::dropIfExists('players');
    }
}
