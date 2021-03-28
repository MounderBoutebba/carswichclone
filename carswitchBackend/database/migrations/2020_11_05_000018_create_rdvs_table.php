<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->references('id')->on('cars');
            $table->foreignId('admin_id')->references('id')->on('backoffice_users');
            $table->foreignId('garage_id')->nullable(true)->references('id')->on('garages');
            $table->string('address')->nullable(true);
            $table->date('rdv_date');
            $table->time('rdv_time');
            $table->enum('rdv_type', ['inspection', 'sale', 'visit', 'unavaibility']);
            $table->float('expected_payment')->default(0);
            $table->boolean('payment_is_collected');
            $table->text('note')->nullable(true);
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
        Schema::dropIfExists('rdvs');
    }
}
