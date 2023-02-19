<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Podcast>
 */
class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'body' => fake()->paragraph(3),
            'categorisation_id' => random_int(1,3),
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => fake()->dateTimeBetween('-5 days', 'now')->format('Y-m-d H:i:s'),
        ];
    }
}
