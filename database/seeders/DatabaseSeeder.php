<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Job;
use App\Models\Cars;
use App\Models\Home;
use App\Models\Land;
use App\Models\Shop;
use App\Models\Mobile;
use App\Models\General;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Cars::factory()
        ->count(50)
        ->create();
        General::factory()
        ->count(50)
        ->create();
        Home::factory()
        ->count(50)
        ->create();
        Job::factory()
        ->count(50)
        ->create();
        Land::factory()
        ->count(50)
        ->create();


        Mobile::factory()
        ->count(50)
        ->create();
        Shop::factory()
        ->count(50)
        ->create();
         \App\Models\Job::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);
    }
}
