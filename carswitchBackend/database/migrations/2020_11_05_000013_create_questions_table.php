<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_fr')->nullable(true);
            $table->string('question_en')->nullable(true);
            $table->string('question_ar')->nullable(true);
            $table->enum('type', ['exterior', 'interior', 'engine', 'driving', 'electronic_diagnostic', 'tyre_and_brake', 'scratches', 'document', 'underbody']);
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
        Schema::dropIfExists('questions');
    }
}
