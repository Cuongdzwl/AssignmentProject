<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryProduct;
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
        // Create role models
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'mod']);
        // Generate admin accounts
        $user = \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ]);
        $user->assignRole('admin');
        $user = \App\Models\User::create([
            'name' => 'Moderator',
            'email' => 'mod@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $user->assignRole('mod');
        // Dummy data
        Category::create(['category_name' => 'Featured products','description'=>'New recommendations']);
        Category::create(['category_name' => 'Summer 2023','description'=>'New recommendations']);

        \App\Models\Product::factory(25)->create();
        \App\Models\User::factory(10)->create();

        for ($i=1; $i <= 10; $i++) { 
            CategoryProduct::create(['cat_ID' => 1,'product_ID' => $i]);
            CategoryProduct::create(['cat_ID' => 2,'product_ID' => $i+5]);
        }
        // Create dummy models
    }
}
