<?php

namespace Database\Seeders;

use App\Models\DrinkSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinkScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DrinkSchedule::factory()
            ->count(10)
            ->create();
    }
}
