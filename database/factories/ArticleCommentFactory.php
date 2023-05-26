<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleComment>
 */
class ArticleCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'article_id' => random_int(3, 5), // the article range to randomly create comments for
            'author' => fake()->name(),
            'body' => fake()->words($num = 12, $asText = true),
            'created_at' => fake()->dateTimeBetween('-1 days', 'now')->format('Y-m-d H:i:s'),
        ];
    }
}
