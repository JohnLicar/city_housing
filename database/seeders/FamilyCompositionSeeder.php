<?php

namespace Database\Seeders;

use App\Models\FamilyComposition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilyCompositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FamilyComposition::factory(3)->create();
    }
}
