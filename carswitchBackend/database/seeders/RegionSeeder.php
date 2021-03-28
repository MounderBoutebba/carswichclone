<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{

    private $regions = [
        "L'Algérois",
        "Les Aurès",
        "Le Constantinois",
        "Le Gourara",
        "Les Hauts plateaux",
        "Le Hodna",
        "Le Hoggar",
        "La Grande Kabylie",
        "La Petite Kabylie",
        "La Basse Kabylie",
        "La Kabylie Orientale (Kabylie de Collo)",
        "Le Pays Kotama (Kabylie des Kutamas)",
        "Le Mzab",
        "La Mitidja",
        "Le pays Annabi",
        "La Saoura",
        "Le Souf",
        "Le Sud Oranais",
        "Le Titteri",
        "Le Tell",
        "Le Tidikelt",
        "Les Trara",
        "Le Touat",
        "L'Oranie",
        "La vallée du Chélif, la Dahra et l'Ouarsenis",
        "Les Zibans"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->regions as $region) {
            if (!Region::where('name', $region)->first()) {
                DB::table('regions')->insert([
                    'name' => $region,
                ]);
            }
        }
    }
}
