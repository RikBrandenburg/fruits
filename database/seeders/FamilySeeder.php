<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $familyData = [
            [
                'name' => 'Rosaceae', // Includes apples, pears, cherries, etc.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rutaceae', // Includes citrus fruits like oranges, lemons, limes.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Musaceae', // Includes bananas and plantains.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Solanaceae', // Includes tomatoes and some berries like ground cherries.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anacardiaceae', // Includes mangoes, cashews, pistachios.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ericaceae', // Includes blueberries, cranberries.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Moraceae', // Includes figs, mulberries.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vitaceae', // Includes grapes.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cucurbitaceae', // Includes melons, cucumbers, squash.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sapindaceae', // Includes lychee, rambutan, longan.
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('family')->insert($familyData);	
        
    }
}
