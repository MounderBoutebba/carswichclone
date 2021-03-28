<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackofficeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backoffice_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('id')->on('roles');
            $table->foreignId('garage_id')->nullable(true)->references('id')->on('garages');
            $table->string('first_name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->string('email')->unique();
            $table->string('password')->nullable(false);
            $table->string('phone')->nullable(false);
            $table->string('picture')->nullable(true);
            $table->string('birthday');
            $table->string('city');
            $table->string('address');
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
        Schema::dropIfExists('backoffice_users');
    }
}
