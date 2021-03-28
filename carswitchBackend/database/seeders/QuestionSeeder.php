<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class QuestionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $engines = json_decode(File::get(__DIR__ . '/attachments/questions/engine.json'), true);
        $electronic = json_decode(File::get(__DIR__ . '/attachments/questions/electronic.json'), true);
        $driving = json_decode(File::get(__DIR__ . '/attachments/questions/driving.json'), true);
        $exterior = json_decode(File::get(__DIR__ . '/attachments/questions/exterior.json'), true);
        $interior = json_decode(File::get(__DIR__ . '/attachments/questions/interior.json'), true);
        $pont = json_decode(File::get(__DIR__ . '/attachments/questions/pont.json'), true);
        $tyre = json_decode(File::get(__DIR__ . '/attachments/questions/tyre.json'), true);

        $questions = array_merge($engines, $electronic, $driving, $exterior, $interior, $pont, $tyre);
        foreach ($questions as $question) {
            if (!Question::where('question_fr', $question['name_fr'])->first()) {
                Question::create([
                    'question_fr' => $question['name_fr'],
                    'type' => $question['type'],
                ])->save();
            }
        }
    }
}
