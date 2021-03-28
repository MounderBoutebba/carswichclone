<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\BackofficeUser;
use App\Models\Garage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class BackOfficeUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BackofficeUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id' => Role::all()->random(1)->first(),
            'garage_id'  => null,
            'first_name'  => $this->faker->firstName,
            'last_name'  => $this->faker->lastName,
            'email'  => $this->faker->unique()->freeEmail,
            'password'  => Hash::make('azerty123'),
            'phone'  => $this->faker->phoneNumber,
            'picture'  => null,
            'birthday'  => $this->faker->date('Y-m-d'),
            'city'  => $this->faker->city,
            'address'  => $this->faker->address,
        ];
    }
}
