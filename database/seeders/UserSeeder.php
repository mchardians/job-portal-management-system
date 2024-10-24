<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Human resource',
            'email' => 'hr@bux.com',
            'password' => bcrypt('tastastas'),
            'created_at' => now(),
            'updated_at' => now(),
            'role_id' => 1
        ]);
    }
}
