<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(1000)->create();

        // $chunks = $users->chunk(200);

        // $chunks->each(function ($chunk) {
        //     User::insert($chunk->toArray());
        // });
    }
}
