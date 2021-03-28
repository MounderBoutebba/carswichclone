<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;


class FeatureSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $features = [
            [
                'name_en' => 'airbag',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'air_conditioning',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'radio',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'cd_player',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'power_windows',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'power_steering',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'premium_sound_system',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'power_folding_exterior_mirrors',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'heating',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'cassette_player',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'central_power_locks',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'power_seats',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'steering_wheel_controls',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'paddle_shifters',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'cruise_control',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'adaptive_cruise_control',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'bluetooth',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'navigation_system_available',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'audio_navigation_fully_operational',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'parking_sensors',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'parking_reverse_cam',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'birds_eye_view_cam',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'blind_spot_monitor',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'digital_display',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'memory_seats',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'heated_cooled_seats',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'fog_lights',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'xeon_lights',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'push_button_start',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'keyless_entry',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'brake_assist_system',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'lumbar_support',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
            [
                'name_en' => 'rear_entertainment_screens',
                'name_fr' => '',
                'name_ar' => '',
                'icon' => ''
            ],
        ];

        foreach ($features as $feature) {
            if (!Feature::where('name_en', $feature['name_en'])->first()) {
                Feature::create([
                    'name_en' => $feature['name_en'],
                    'name_fr' => null,
                    'name_ar' => null,
                    'icon'    => null
                ])->save();
            }
        }
    }
}
