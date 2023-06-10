<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Applicant',
                'email' => 'applicant@gmail.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12345678')
            ],
        ];

        for ($i=0; $i < count($users); $i++) {
            User::create($users[$i]);
        }
    }
}
