<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assets = [
            [
                'asset_id' => rand(10, 999),
                'asset_no' => rand(10, 999),                
                'name' => 'Asset 1',
                'type' => 'Bin'
            ],
            [
                'asset_id' => rand(10, 999),
                'asset_no' => rand(10, 999),                
                'name' => 'Asset 2',
                'type' => 'Bin'
            ],
            [
                'asset_id' => rand(10, 999),
                'asset_no' => rand(10, 999),                
                'name' => 'Asset 3',
                'type' => 'Not Bin'
            ]
        ];

        for ($i=0; $i < count($assets); $i++) { 
            Asset::create($assets[$i]);
        }
    }
}
