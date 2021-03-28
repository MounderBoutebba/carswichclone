<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\MileagePriceLog;
use Illuminate\Database\Seeder;

class MileagePriceLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $Mileage = MileagePriceLog::factory()->create();
            $currentCar = Car::find($Mileage->car_id);
            $currentCar->last_mileage_price_log_id = $Mileage->id;
            $currentCar->save();
        }
    }
}
