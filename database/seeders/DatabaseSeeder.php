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
        $user = \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ]);
        $user->assignRole('admin');
        Category::create(['category_name' => 'Featured products','description'=>'New recommendations']);

        for ($i=0; $i < 10; $i++) { 
            CategoryProduct::create(['cat_ID' => '1','product_ID' => $i]);
        }
        // Create dummy models
        \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(25)->create();
    }
}
