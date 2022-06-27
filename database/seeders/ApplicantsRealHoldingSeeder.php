<?php

namespace Database\Seeders;

use App\Models\ApplicantRealHoldings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicantsRealHoldingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantRealHoldings::factory(10)->create();
    }
}
