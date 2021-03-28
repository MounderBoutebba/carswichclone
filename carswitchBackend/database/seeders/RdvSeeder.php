<?php

namespace Database\Seeders;

use App\Models\Rdv;
use Illuminate\Database\Seeder;

class RdvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rdv::factory()
            ->times(env('MAX_RDVS', 10))
            ->create();
    }
}
