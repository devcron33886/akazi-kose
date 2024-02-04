<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'website_title' => 'AKAZI KOSE',
                'phone' => '+250 785 xxx xxx',
                'whatsapp' => '+250 785 xxx xxx',
                'address' => 'KIGALI RWANDA',
                'email' => 'info@akazikose.com',
                'twitter' => 'https://x.com/akazi-kose',
                'instagram' => 'https://instagram.com/akazi-kose',
                'facebook' => 'https://facebook.com/akazi-kose',
                'linkedin' => 'https://linkedin/akazi-kose',
                'about' => 'Akazi kose is job, tender and other realted advert site',

            ]

        ];
        Setting::insert($settings);
    }
}
