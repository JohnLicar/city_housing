<?php

namespace Database\Seeders;

use App\Models\RealHolding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealHoldingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RealHolding::factory(3)->create();
    }
}
