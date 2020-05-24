<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->char('name', 50)->nullable(false);
            $table->unsignedInteger('won')->default(0);
            $table->unsignedInteger('loss')->default(0);
            $table->unsignedInteger('draw')->default(0);
            $table->unsignedInteger('point')->default(0);
            $table->char('coach', 50)->nullable();
            $table->integer('pool_id')->nullable('false');
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
        Schema::dropIfExists('teams');
    }
}
