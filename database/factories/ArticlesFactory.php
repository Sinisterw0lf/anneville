<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(4),
            'url_img' => "https://source.unsplash.com/random/640×480/?movie,poster",
            'description2' => fake()->paragraph(4),
            'type' =>fake()->randomElement(['Actualités','Agenda','Cadredevie','Mairie','Liens']),
            'created_at' => now(),
        ];
    }
}
