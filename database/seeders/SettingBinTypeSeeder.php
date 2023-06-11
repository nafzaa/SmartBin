<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingBinType;

class SettingBinTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $binTypes = [
            ['name'=>'MGB 120L'],
            ['name'=>'MGB 240L']
        ];
        for ($i=0; $i < count($binTypes); $i++) {
            SettingBinType::create($binTypes[$i]);
        }
    }
}
