<?php

namespace Database\Seeders;

use App\Models\Requirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $requirements = [

            'Photocopy of PSA Live Birth of Awardee',
            'Photocopy of PSA Certificate of Marriage',
            'Notarized Affidavit of Cohabitation',
            'Photocopy of any Valid or Government Issued ID of the Awardee',
            'Photocopy of any Valid or Government Issued ID of spouse',
            'Sworn Application Form',

        ];

        foreach ($requirements as $requirement) {
            Requirement::create(['description' => $requirement]);
        }
    }
}
