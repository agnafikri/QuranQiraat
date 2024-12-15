<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\surahs>
 */
class surahsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'arabic_name' => fake()->sentence(3),
            'total_ayah' => fake()->randomNumber(3),
            'description' => fake()->sentence(15),
            'category' => fake()->sentence(rand(1, 2), false),
        ];
    }
}
