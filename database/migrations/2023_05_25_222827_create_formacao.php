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
        Schema::create('formacao', function (Blueprint $table) {
            $table->increments('id');;
            $table->integer('match_id');
            $table->foreign('match_id')->references('id')->on('matchs_days');
            $table->integer('first_team');
            $table->foreign('first_team')->references('id')->on('teams');
            $table->integer('second_team');
            $table->foreign('second_team')->references('id')->on('teams');
            $table->string('first_formation');
            $table->string('second_formation');
            $table->timestamps();
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
        Schema::dropIfExists('formacao');
    }
};
