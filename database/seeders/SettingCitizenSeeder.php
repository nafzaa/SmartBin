<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingCitizen;

class SettingCitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $citizens = [
            ['name'=>'MALAYSIA']
        ];
        for ($i=0; $i < count($citizens); $i++) { 
            SettingCitizen::create($citizens[$i]);
        }
    }
}
