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
        Schema::create('mensagem_suporte', function (Blueprint $table) {
            $table->increments('id');;
            $table->integer('suporte_id');
            $table->foreign('suporte_id')->references('id')->on('suporte');
            $table->integer('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->string('mensagem');
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
        Schema::dropIfExists('mensagem_suporte');
    }
};
