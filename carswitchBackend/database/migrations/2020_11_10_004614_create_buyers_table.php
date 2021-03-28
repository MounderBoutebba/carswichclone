<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->references('id')->on('cars');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->enum('status', ['new', 'in_progress', 'offer_rejected', 'not_concluded', 'not_interested', 'reserved', 'pipeline', 'concluded', 'sold_by_V']);
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
        Schema::dropIfExists('buyers');
    }
}
