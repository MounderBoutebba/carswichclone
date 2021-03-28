<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Inspection;
use Illuminate\Database\Seeder;

class InspectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < env('MAX_INSPECTIONS', 10); $i++) {
            $inspection = Inspection::factory()->create();
            $currentCar = Car::find($inspection->car_id);
            $currentCar->last_inspection_id = $inspection->id;
            $currentCar->save();
        }
    }
}
