<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingScheme;

class SettingSchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schemes = [
            ['name'=>'PHKT01'],
            ['name'=>'PHKT02'],
            ['name'=>'PHTK03']
        ];
        for ($i=0; $i < count($schemes); $i++) {
            SettingScheme::create($schemes[$i]);
        }
    }
}
