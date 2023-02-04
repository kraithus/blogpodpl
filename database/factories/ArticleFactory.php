<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->words($num = 7, $asText = true);
        $slug = Str::slug($title, '-');

        return [
            'title' => $title,
            'slug' => $slug,
            'click_bait' => fake()->words($num = 8, $asText = true),
            'body' => fake()->paragraph(3),
            'main_image' => 'Sq6pC5W.jpeg',
            'categorisation_id' => random_int(1,3),
            'writer_id' => random_int(1,3),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
