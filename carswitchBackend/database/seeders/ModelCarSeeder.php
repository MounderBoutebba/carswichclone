<?php

namespace Database\Seeders;

use App\Models\ModelCar;
use App\Models\Marque;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ModelCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cars = json_decode(File::get(__DIR__ . '/attachments/CarModel.json'), true);
        foreach ($cars as $car) {
            // dd($car);

            $marque = new Marque();
            $marque->name =  $car['brand'];
            $marque->save();

            foreach ($car['models'] as $model) {
                if (!ModelCar::where('name', $model)->first()) {
                    ModelCar::create([
                        'marque_id' => $marque->id,
                        'name' => $model,
                    ])->save();
                }
            }
        }
    }
}
