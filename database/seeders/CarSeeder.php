<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cars::factory()
        ->count(5)
        ->create();
    }
}
