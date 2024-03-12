<?php

namespace Database\Seeders;

use App\Models\FeedScheduleTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedScheduleTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeedScheduleTime::factory()->count(20)->create();
    }
}
