<?php

namespace Database\Seeders;


use App\Models\Car;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= User::count(); $i++) {
            $random = $faker->numberBetween(1, Car::count());
            for ($j = $faker->numberBetween(1, $random); $j <= $random; $j++) {
                DB::table('user_like_car')->insert([
                    'user_id' => User::find($i)->id,
                    'car_id' => Car::find($j)->id
                ]);
            }
        }
    }
}
