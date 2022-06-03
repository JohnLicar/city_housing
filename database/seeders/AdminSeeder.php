<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'first_name' => 'City',
            'middle_name' => '',
            'last_name' => 'Housing',
            'gender' => 'Male',
            'contact' => '(+63) 935 123 4567',
            'address' => '62V5+F58, Paterno Extension, Downtown, Tacloban City, Leyte',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $admin->assignRole('admin');
    }
}
