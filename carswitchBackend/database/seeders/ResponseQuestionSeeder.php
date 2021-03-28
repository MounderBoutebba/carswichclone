<?php

namespace Database\Seeders;


use App\Models\Inspection;
use App\Models\Question;
use App\Models\ResponseQuestion;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ResponseQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= env('MAX_INSPECTIONS', 10); $i++) {
            $inspection = Inspection::find($i);
            for ($j = 1; $j <= Question::count(); $j++) {
                ResponseQuestion::create([
                    'inspection_id' => $inspection->id,
                    'question_id' => Question::find($j)->id,
                    'car_picture_id' => null,
                    'response' => $faker->randomElement(['yes', 'no', 'n/c', 'n/a']),
                    'note' => $faker->text,
                ])->save();
            }
        }
    }
}
