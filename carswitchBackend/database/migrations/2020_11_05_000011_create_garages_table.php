<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->foreignId('wilaya_id')->references('id')->on('wilayas');
            $table->string('address');
            $table->foreignId('sunday_time')->nullable(true)->references('id')->on('opening_times');
            $table->foreignId('monday_time')->nullable(true)->references('id')->on('opening_times');
            $table->foreignId('tuesday_time')->nullable(true)->references('id')->on('opening_times');
            $table->foreignId('wednesday_time')->nullable(true)->references('id')->on('opening_times');
            $table->foreignId('thursday_time')->nullable(true)->references('id')->on('opening_times');
            $table->foreignId('friday_time')->nullable(true)->references('id')->on('opening_times');
            $table->foreignId('saturday_time')->nullable(true)->references('id')->on('opening_times');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garages');
    }
}
