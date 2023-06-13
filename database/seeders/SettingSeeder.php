<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name'=>'Scheme'
            ],
            [
                'name'=>'Recipient'
            ],
            [
                'name'=>'Premise Type'
            ],
            [
                'name'=>'State'
            ],
            [
                'name'=>'Citizen'
            ],
            [
                'name'=>'Bin Type'
            ],
            [
                'name'=>'Bin Delivery'
            ],
            [
                'name'=>'Bin Acceptance Category'
            ],
            [
                'name'=>'Application Category'
            ]
        ];
    }
}
