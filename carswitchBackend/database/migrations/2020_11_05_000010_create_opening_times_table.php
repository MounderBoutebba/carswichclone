<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpeningTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opening_times', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->unsignedTinyInteger('morning_opening_time');
            $table->unsignedTinyInteger('morning_close_time');
            $table->unsignedTinyInteger('afternoon_opening_time');
            $table->unsignedTinyInteger('afternoon_close_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opening_times');
    }
}
