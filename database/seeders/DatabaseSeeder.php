<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rik Brandenburg',
            'email' => 'rikb@outlook.com',
        ]);

        $this->call([
            FruitSeeder::class,
            FamilySeeder::class,
        ]);
    }
}
