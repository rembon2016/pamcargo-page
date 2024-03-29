<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminRole = \App\Models\Role::create([
            'name' => 'admin'
        ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@pamcargo.com',
            'password' => 'password',
            'email_verified_at' => now(),
            'role_id' => $adminRole->id,
        ]);

        // Country Seeder
        $this->call(CountrySeeder::class);
    }
}
