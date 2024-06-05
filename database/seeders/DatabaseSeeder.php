<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SoftwareSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call your seeder here
        $this->call(SoftwareSeeder::class);
    }
}
