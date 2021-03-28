<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Buyer;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuyerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buyer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_id' => Car::all()->random(1)->first(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['new', 'in_progress', 'offer_rejected', 'not_concluded', 'not_interested', 'reserved', 'pipeline', 'concluded', 'sold_by_V']),
        ];
    }
}
