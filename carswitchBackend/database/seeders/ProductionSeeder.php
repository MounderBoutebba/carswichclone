<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RegionSeeder::class,
            WilayaSeeder::class,
            FeatureSeeder::class,
            QuestionSeeder::class,
            ModelCarSeeder::class,
            RoleSeeder::class,
            AuthorizationSeeder::class
        ]);
    }
}
