<?php

namespace Database\Seeders;

use App\Models\OpeningTime;
use Illuminate\Database\Seeder;

class OpeningTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpeningTime::create([
            'name'=> 'normal',
            'morning_opening_time' => 8,
            'morning_close_time' => 12,
            'afternoon_opening_time' => 13,
            'afternoon_close_time' => 17,
        ])->save();

        OpeningTime::create([
            'name'=> 'extra',
            'morning_opening_time' => 8,
            'morning_close_time' => 12,
            'afternoon_opening_time' => 13,
            'afternoon_close_time' => 18,
        ])->save();

        OpeningTime::create([
            'name'=> 'hard',
            'morning_opening_time' => 8,
            'morning_close_time' => 12,
            'afternoon_opening_time' => 13,
            'afternoon_close_time' => 20,
        ])->save();
    }
}
