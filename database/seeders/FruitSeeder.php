<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fruitData = [
            [
            'name' => 'Apple',
            'colour' => 'Red',
            'weight' => 0.2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
        [
            'name' => 'Banana',
            'colour' => 'Yellow',
            'weight' => 0.3,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Orange',
            'colour' => 'Orange',
            'weight' => 0.4,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Grapes',
            'colour' => 'Green',
            'weight' => 0.5,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

        DB::table('fruits')->insert($fruitData);
    }
}
