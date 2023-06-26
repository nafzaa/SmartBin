<?php

namespace Database\Seeders;

use App\Models\Applicant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $applicants = [
            [
                'name'=>'NOR BIN TAHIR',
                'ic'=>'7008090304'
            ],
            [
                'name'=>'IDRUS BIN BADRUL',
                'ic'=>'800907070503'
            ],
            [
                'name'=>'JAMAL BIN NASIR',
                'ic'=>'700506040302'
            ],
            [
                'name'=>'SYAHRUL BIN AZHAR',
                'ic'=>'900903040506'
            ],
            [
                'name'=>'KHAIRIAH BINTI AZHAR',
                'ic'=>'890304010205'
            ]
        ];

        for($i = 0; $i<count($applicants); $i++){
            Applicant::create($applicants[$i]);
        }
    }
}
