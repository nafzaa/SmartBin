<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingApplicationCategory;

class SettingApplicationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $applicationCategories = [
            ['name'=>'KHIDMAT PELANGGAN (AFSB)'],
            ['name'=>'OPERASI'],
            ['name'=>'PELANGGAN (WALK-IN)'],
            ['name'=>'SEMAKAN DI LAPANGAN (TUKAR TERUS)'],
        ];
        for ($i=0; $i < count($applicationCategories); $i++) { 
            SettingApplicationCategory::create($applicationCategories[$i]);
        }
    }
}
