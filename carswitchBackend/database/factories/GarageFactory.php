<?php

namespace Database\Factories;

use App\Models\Garage;
use Illuminate\Database\Eloquent\Factories\Factory;

class GarageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Garage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'wilaya_id' => $this->faker->numberBetween(1, 48),
            'address' => $this->faker->address,
            'sunday_time' => $this->faker->randomElement([1, 2, 3, null]),
            'monday_time' => $this->faker->randomElement([1, 2, 3, null]),
            'tuesday_time' => $this->faker->randomElement([1, 2, 3, null]),
            'wednesday_time' => $this->faker->randomElement([1, 2, 3, null]),
            'thursday_time' => $this->faker->randomElement([1, 2, 3, null]),
            'friday_time' => $this->faker->randomElement([1, 2, 3, null]),
            'saturday_time' =>  $this->faker->randomElement([1, 2, 3, null]),
        ];
    }
}
