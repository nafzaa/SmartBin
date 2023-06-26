<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssetBin;

class AssetBinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=2040001; $i < 2042807; $i++) {
            AssetBin::create([
                'm'=>1,
                's' => 'A'.$i,
                'status'=>'In Stock'
            ]);
        }

        // CONTOH
        for ($i=2042808; $i < 2045614; $i++) {
            AssetBin::create([
                'm'=>2,
                's' => 'B'.$i.'Contoh',
                'status'=>'In Stock'
            ]);
        }
    }
}
