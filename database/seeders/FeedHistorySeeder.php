<?php

namespace Database\Seeders;

use App\Models\FeedHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeedHistory::factory()
            ->count(40)
            ->create();
    }
}
