<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingBinAcceptanceCategory;

class SettingBinAcceptanceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $binAcceptanceCategories = [
            ['name'=>'VO BARU'],
            ['name'=>'VO LAMA'],
            ['name'=>'PECAH/ROSAK']
        ];
        for ($i=0; $i < count($binAcceptanceCategories); $i++) {
            SettingBinAcceptanceCategory::create($binAcceptanceCategories[$i]);
        }
    }
}
