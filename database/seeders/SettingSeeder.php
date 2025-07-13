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
        Setting::updateOrCreate(['id' => 1],[
            'address' => 'address 1',
            'phone' => '0664687657',
            'email' => 'lokmanbrahmia16@gmail.com',
            'facebook' => 'Abdelmoname Brahmia'
        ]);
    }
}
