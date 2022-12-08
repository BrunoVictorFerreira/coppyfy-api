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
        Schema::table('team_information', function (Blueprint $table) {
            $table->integer('emp')->default(0);
            $table->integer('gols')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team_information', function (Blueprint $table) {
            $table->dropColumn('emp');
            $table->dropColumn('gols');
        });
    }
};
