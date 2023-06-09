<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            // BinSeeder::class,
            // AssetSeeder::class,
            ApplicantSeeder::class,

            // Setting
            SettingSchemeSeeder::class,
            SettingPremiseTypeSeeder::class,
            SettingNegeriSeeder::class,
            SettingRecipientSeeder::class,
            SettingCitizenSeeder::class,
            SettingApplicationCategorySeeder::class,
            SettingBinTypeSeeder::class,
            SettingBinAcceptanceCategorySeeder::class,
            SettingBinDeliverySeeder::class,
            SettingApplicationStatusSeeder::class,
            AssetBinSeeder::class,
        ]);

    }
}
