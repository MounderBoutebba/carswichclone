<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ColorSeeder::class,
            RegionSeeder::class,
            WilayaSeeder::class,
            OpeningTimeSeeder::class,
            GarageSeeder::class,
            FeatureSeeder::class,
            QuestionSeeder::class,
            ModelCarSeeder::class,
            CarSeeder::class,
            MileagePriceLogSeeder::class,
            RoleSeeder::class,
            AuthorizationSeeder::class,
            BackOfficeUserSeeder::class,
            RdvSeeder::class,
            InspectionSeeder::class,
            ResponseQuestionSeeder::class,
            CarFeatureSeeder::class,
            LikeSeeder::class,
            BuyerSeeder::class
        ]);
    }
}
