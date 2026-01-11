<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Optional: clear users table
        DB::table('users')->truncate();

        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@sync.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Create Normal User
        User::create([
            'name' => 'Normal User',
            'email' => 'user@sync.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        // Add more roles/users if needed
    }
}
