<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => "Nofan",
            'email' => "nofann.fan@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('Nofan19!'),
        ]);

        User::factory(5)->create();
    }
}
