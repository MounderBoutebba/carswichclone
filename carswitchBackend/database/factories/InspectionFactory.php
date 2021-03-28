<?php

namespace Database\Factories;

use App\Models\BackofficeUser;
use App\Models\Rdv;
use App\Models\Inspection;
use Illuminate\Database\Eloquent\Factories\Factory;

class InspectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inspection::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rdv = Rdv::factory()->create([
            'rdv_type' => 'inspection'
        ]);

        return [
            'car_id' => $rdv->car,
            'rdv_id' => $rdv->id,
            'admin_id' => BackofficeUser::all()->random(1)->first(),
            'garage_id' => $rdv->garage,
            'type' => $this->faker->randomElement(['first_level', 'second_level', 'both']),
        ];
    }
}
