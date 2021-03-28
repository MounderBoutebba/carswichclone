<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_question', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inspection_id')->references('id')->on('inspections');
            $table->foreignId('question_id')->references('id')->on('questions');
            $table->foreignId('car_picture_id')->nullable(true)->references('id')->on('car_pictures');
            $table->enum('response', ['yes', 'no', 'n/c', 'n/a']);
            $table->text('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('response_question');
    }
}
