<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingRecipient;

class SettingRecipientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipients = [
            ['name'=>'PEMILIK'],
            ['name'=>'PENYEWA'],
            ['name'=>'WAKIL']
        ];
        for ($i=0; $i < count($recipients); $i++) { 
            SettingRecipient::create($recipients[$i]);
        }
    }
}
