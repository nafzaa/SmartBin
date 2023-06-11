<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingBinDelivery;

class SettingBinDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settingBinDelivery = [
            ['name'=>'TONG BARU']
        ];
        for ($i=0; $i < count($settingBinDelivery); $i++) { 
            SettingBinDelivery::create($settingBinDelivery[$i]);
        }
    }
}
