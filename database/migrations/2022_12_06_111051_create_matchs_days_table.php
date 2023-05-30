<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchs_days', function (Blueprint $table) {
            $table->increments('id');;
            $table->integer('first_team');
            $table->integer('second_team');
            $table->boolean('important')->default(false);
            $table->timestamps();
            $table->foreign('first_team')->references('id')->on('teams');
            $table->foreign('second_team')->references('id')->on('teams');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchs_days');
    }
};
