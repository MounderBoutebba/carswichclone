<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            ['name' => 'white', 'hex' => '#ffffff'],
            ['name' => 'black', 'hex' => '#000000'],
            ['name' => 'grey', 'hex' => '#808080'],
            ['name' => 'silver', 'hex' => '#c0c0c0'],
            ['name' => 'red', 'hex' => '#ff0000'],
            ['name' => 'blue', 'hex' => '#0000ff'],
            ['name' => 'brown', 'hex' => '#a52a2a'],
            ['name' => 'burngundy', 'hex' => '#800020'],
            ['name' => 'green', 'hex' => '#008000'],
            ['name' => 'orange', 'hex' => '#ffa500'],
            ['name' => 'yellow', 'hex' => '#ffff00'],
            ['name' => 'purple', 'hex' => '#800080'],
        ];

        foreach ($colors as $color) {
            if (!Color::where(['name' => $color['name'], 'hex' => $color['hex']])->first()) {
                Color::create([
                    'name' => $color['name'],
                    'hex' => $color['hex']
                ])->save();
            }
        }
    }
}
