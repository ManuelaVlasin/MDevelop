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
        Schema::table('lessons', function (Blueprint $table) {
            $table->string('teaching_day_1')->nullable();
            $table->string('teaching_day_2')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->integer('number_of_hours')->nullable();
            $table->string('location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropColumn('teaching_day_1');
            $table->dropColumn('teaching_day_2');
            $table->dropColumn('start_time');
            $table->dropColumn('end_time');
            $table->dropColumn('number_of_hours');
            $table->dropColumn('location');
        });
    }
};
