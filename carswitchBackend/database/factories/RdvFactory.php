<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Rdv;
use App\Models\Garage;
use App\Models\BackofficeUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class RdvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rdv::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_id' => Car::all()->random(1)->first(),
            'admin_id' => BackofficeUser::all()->random(1)->first(),
            'garage_id' => Garage::all()->random(1)->first(),
            'address' => $this->faker->address,
            'rdv_date' => $this->faker->dateTimeBetween('now', '+01 year')->format("Y-m-d"),
            'rdv_time' => $this->faker->time('H:i'),
            'rdv_type' => $this->faker->randomElement(['sale', 'visit', 'unavaibility']),
            'expected_payment' => $this->faker->randomNumber(4),
            'payment_is_collected' => $this->faker->boolean,
            'note' => $this->faker->text,
        ];
    }
}
