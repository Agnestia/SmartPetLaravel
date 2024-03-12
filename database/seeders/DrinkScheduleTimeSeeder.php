<?php

namespace Database\Seeders;

use App\Models\DrinkScheduleTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinkScheduleTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DrinkScheduleTime::factory()
            ->count(20)
            ->create();
    }
}
