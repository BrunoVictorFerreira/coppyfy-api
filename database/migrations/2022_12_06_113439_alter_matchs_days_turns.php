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
        Schema::table('matchs_days', function (Blueprint $table) {
            $table->boolean('first_turn')->default(true);
            $table->boolean('second_turn')->default(false);
            $table->boolean('third_turn')->default(false);
            $table->boolean('octaves_turn')->default(false);
            $table->boolean('fourth_turn')->default(false);
            $table->boolean('semi_turn')->default(false);
            $table->boolean('final_turn')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matchs_days', function (Blueprint $table) {
            $table->dropColumn('first_turn');
            $table->dropColumn('second_turn');
            $table->dropColumn('third_turn');
            $table->dropColumn('octaves_turn');
            $table->dropColumn('fourth_turn');
            $table->dropColumn('semi_turn');
            $table->dropColumn('final_turn');
        });
    }
};
