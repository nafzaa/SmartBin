<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingApplicationStatus;

class SettingApplicationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $job_statuses = [
            ['name'=>'BARU'],
            ['name'=>'DALAM PROSES'],
            ['name'=>'SELESAI'],
        ];

        for ($i=0; $i < count($job_statuses); $i++) {
            SettingApplicationStatus::create($job_statuses[$i]);
        }
    }
}
