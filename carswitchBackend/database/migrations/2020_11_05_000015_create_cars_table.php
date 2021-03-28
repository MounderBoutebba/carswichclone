<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('color_id')->references('id')->on('colors');
            $table->foreignId('wilaya_id')->references('id')->on('wilayas');
            $table->foreignId('model_id')->references('id')->on('models_car');
            $table->enum('body', ['sedan', 'suv', 'coupe', 'hatchback', 'convertible', 'wagon', 'pickup', 'minivan', 'van']);
            $table->enum('status', ['new', 'remind', 'duplicate', 'bad_condition', 'missing_documents', 'not_interested', 'refusal_to_pay_inspection', 'refusal_to_pay_commission', 'unreachable', 'overvalued', 'appointment_taken', 'published', 'already_sold', 'concluded', 'sold_by_v'])->default('new')->nullable(false);
            $table->enum('tyre', ['12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22']);
            $table->enum('document', ['carte_grise', 'carte_jaune', 'licence']);
            $table->enum('roof', ['sunroof', 'sun_and_moonroof', 'moonroof', 'panoramic', 'convertible', 'normal_roof']);
            $table->enum('specs', ['GCC', 'european', 'japanese', 'american', 'canadian', 'non_GCC']);
            $table->enum('drive_type', ['AWD', '2WD', '4WD']);
            $table->enum('deal', ['fantastic_deal', 'from_agency']);
            $table->enum('seat', ['leather_seats', 'fabric_seats']);
            $table->enum('transmistion', ['automatic', 'manual', 'tiptronic']);
            $table->enum('energy', ['ess', 'diesel', 'hybride']);
            $table->integer('seat_number')->default(5);
            $table->integer('number_of_owners')->nullable(true);
            $table->integer('cylindre_number');
            $table->year('year');
            $table->integer('horse_power');
            $table->string('registration_document_path')->nullable(true);
            $table->string('control_document_path')->nullable(true);
            $table->string('license_plat');
            $table->string('vin');
            $table->boolean('used');
            $table->string('torque');
            $table->integer('views')->default('0');
            $table->string('phone');
            $table->boolean('featured');
            $table->text('owner_description');
            $table->text('car_overview');
            $table->text('information');
            $table->datetime('expiry_date')->nullable(true);
            $table->timestamp('sold_at')->nullable(true);
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
        Schema::dropIfExists('cars');
    }
}
