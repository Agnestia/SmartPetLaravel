<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeedScheduleTime>
 */
class FeedScheduleTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'feed_schedule_id' => fake()->numberBetween(1, 20),
            'is_done' => fake()->boolean(),
            'is_water' => fake()->boolean(),
            'time' => fake()->time(),
        ];
    }
}
