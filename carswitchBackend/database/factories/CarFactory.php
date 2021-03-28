<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'user_id' => $this->faker->numberBetween(1, \App\Models\User::count()),
            'color_id' => $this->faker->numberBetween(1, \App\Models\Color::count()),
            'wilaya_id' => $this->faker->numberBetween(1, \App\Models\Wilaya::count()),
            'model_id' => $this->faker->numberBetween(1, \App\Models\ModelCar::count()),
            'last_mileage_price_log_id' => null,
            'last_inspection_id' => null,
            'body' => $this->faker->randomElement(['sedan', 'suv', 'coupe', 'hatchback', 'convertible', 'wagon', 'pickup', 'minivan', 'van']),
            'status' => $this->faker->randomElement(['new', 'remind', 'duplicate', 'bad_condition', 'missing_documents', 'not_interested', 'refusal_to_pay_inspection', 'refusal_to_pay_commission', 'unreachable', 'overvalued', 'appointment_taken', 'published', 'already_sold', 'concluded', 'sold_by_v']),
            'tyre' => $this->faker->randomElement(['12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22']),
            'document' => $this->faker->randomElement(['carte_grise', 'carte_jaune', 'licence']),
            'roof' => $this->faker->randomElement(['sunroof', 'sun_and_moonroof', 'moonroof', 'panoramic', 'convertible', 'normal_roof']),
            'specs' => $this->faker->randomElement(['GCC', 'european', 'japanese', 'american', 'canadian', 'non_GCC']),
            'drive_type' => $this->faker->randomElement(['AWD', '2WD', '4WD']),
            'deal' =>  $this->faker->randomElement(['fantastic_deal', 'from_agency']),
            'seat' =>  $this->faker->randomElement(['leather_seats', 'fabric_seats']),
            'transmistion' => $this->faker->randomElement(['Automatic', 'Manual', 'Tiptronic']),
            'energy' => $this->faker->randomElement(['ess', 'diesel', 'hybride']),
            'seat_number' => $this->faker->numberBetween(2, 5),
            'number_of_owners' => $this->faker->numberBetween(1, 4),
            'cylindre_number' => $this->faker->randomElement([2, 4]),
            'year' => $this->faker->year('now'),
            'horse_power' => $this->faker->randomNumber(3, true),
            'registration_document_path' => null,
            'control_document_path' => null,
            'license_plat' => strtoupper(Str::random(10)),
            'vin' => strtoupper(Str::random(17)),
            'used' => $this->faker->boolean(),
            'torque' => 'NO IDEA',
            'views' => $this->faker->randomNumber(3, true),
            'phone' => $this->faker->phoneNumber,
            'featured' => $this->faker->boolean,
            'owner_description' => $this->faker->text(200),
            'car_overview' => $this->faker->text(400),
            'information' => $this->faker->text(100),
            'expiry_date' => $this->faker->randomElement([null, $this->faker->dateTimeBetween('now', '+1 years')]),
            'sold_at' => null,
        ];
    }
}
