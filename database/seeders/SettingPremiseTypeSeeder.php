<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingPremiseType;

class SettingPremiseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settingPremiseTypes = [
            ['name'=>'Kedai'],
            ['name'=>'Rumah'],
            ['name'=>'Rumah Kampung']
        ];
        for ($i=0; $i < count($settingPremiseTypes); $i++) {
            SettingPremiseType::create($settingPremiseTypes[$i]);
        }
    }
}
