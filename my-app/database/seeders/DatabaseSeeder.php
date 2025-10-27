<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MTile;
use Database\Seeders\MGamecardsTableSeeder as SeedersMGamecardsTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(MGamecardsTableSeeder::class);
        $this->call(MTilesSeeder::class);
        $this->call(MRoadsSeeder::class);
        $this->call(MRoads2Seeder::class);
        $this->call(MBasesSeeder::class);
        $this->call(MBasesReductionsSeeder::class);
    }
}
