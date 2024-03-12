<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DrinkScheduleTime>
 */
class DrinkScheduleTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'drink_schedule_id' => fake()->numberBetween(1, 10),
            'is_done' => fake()->boolean(),
            'time' => fake()->time(),
        ];
    }
}
