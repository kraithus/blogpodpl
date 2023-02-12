<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategorisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $name = fake()->word();
        $slug = Str::slug($name, '-');

        return [
            'name' => $name,
            'slug' => $slug,
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
