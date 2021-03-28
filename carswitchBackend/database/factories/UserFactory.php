<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'  => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->freeEmail,
            'password' => Hash::make('azerty123'),
            'phone' => $this->faker->phoneNumber,
            'birthday' => $this->faker->date('Y-m-d'),
            'city' => $this->faker->city,
            'address' => $this->faker->address,
        ];
    }
}
