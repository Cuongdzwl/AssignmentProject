<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        $user = \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ]);
        $user->assignRole('admin');
        \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(25)->create();
    }
}
