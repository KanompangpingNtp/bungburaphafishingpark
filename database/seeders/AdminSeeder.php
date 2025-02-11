<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Reception',
            'email' => 'reception@example.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'Accounting',
            'email' => 'accounting@example.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'Management',
            'email' => 'management@example.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
