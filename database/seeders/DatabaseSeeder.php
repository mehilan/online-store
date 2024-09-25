<?php

namespace Database\Seeders;

use Domains\Catalog\Models\Category;
use Domains\Catalog\Models\Range;
use Domains\Customer\Models\Address;
use Domains\Customer\Models\Location;
use Domains\Customer\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Location::factory(10)->create();
        Address::factory(10)->create();
        User::factory(10)->create();
        Category::factory(10)->create();
        Range::factory(10)->create();
    }
}
