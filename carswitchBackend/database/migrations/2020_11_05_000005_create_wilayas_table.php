<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWilayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayas', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('region_id')->references('id')->on('regions');
            $table->string('name_fr')->nullable(false);
            $table->string('name_ar')->nullable(false);
            $table->string('code_postal')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wilayas');
    }
}
