<?php

namespace Database\Seeders;

use App\Models\BackofficeUser;
use Illuminate\Database\Seeder;

class BackOfficeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BackofficeUser::factory()
            ->times(env('MAX_ADMINS', 10))
            ->create();
    }
}
