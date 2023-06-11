<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingNegeri;

class SettingNegeriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $negeris = [
            ['name'=>'PAHANG']
        ];
        for ($i=0; $i < count($negeris); $i++) { 
            SettingNegeri::create($negeris[$i]);
        }
    }
}
