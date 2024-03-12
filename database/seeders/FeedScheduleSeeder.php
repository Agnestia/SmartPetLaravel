<?php

namespace Database\Seeders;

use App\Models\FeedSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeedSchedule::factory()
            ->count(20)
            ->create();
    }
}
