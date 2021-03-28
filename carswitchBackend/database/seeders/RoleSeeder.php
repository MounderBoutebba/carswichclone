<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Super Admin',
            'Management',
            'Mechanic',
            'Account Manager',
            'Finance',
            'Support',
        ];

        foreach ($roles as $role) {
            if (!Role::where('name', $role)->first()) {
                Role::create([
                    'name' => $role,
                ])->save();
            }
        }
    }
}
