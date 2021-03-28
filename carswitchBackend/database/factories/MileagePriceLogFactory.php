<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\MileagePriceLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class MileagePriceLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MileagePriceLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $min_mileage = 1000;
        $car = Car::all()->random(1)->first();
        if ($car->last_mileage_price_log_id) {
            $min_mileage = $car->lastMileagePriceLog->mileage;
        }
        return [
            'car_id' => $car->id,
            'mileage' => $this->faker->numberBetween($min_mileage, 1000000),
            'price' => $this->faker->randomNumber(5),
        ];
    }
}
