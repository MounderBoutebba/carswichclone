<?php

namespace Database\Seeders;


use App\Models\Car;
use App\Models\Feature;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= Car::count(); $i++) {
            $random = $faker->numberBetween(1, Feature::count());
            for ($j = $faker->numberBetween(1, $random); $j <= $random; $j++) {
                DB::table('car_feature')->insert([
                    'car_id' => Car::find($i)->id,
                    'feature_id' => Feature::find($j)->id
                ]);
            }
        }
    }
}
