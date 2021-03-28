<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historys', function (Blueprint $table) {
            $table->integer('id');
            $table->foreignId('admin_id')->references('id')->on('backoffice_users');
            $table->foreignId('car_id')->references('id')->on('cars');
            $table->ipAddress('ip')->nullable(true);
            $table->string('latitude')->nullable(true);
            $table->string('longitude')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('node')->nullable(false);
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
        Schema::dropIfExists('historys');
    }
}
