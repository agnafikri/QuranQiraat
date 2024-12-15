<?php

namespace Database\Factories;

use App\Models\Surahs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ayahs>
 */
class ayahsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'surah_id' => Surahs::factory(),
            'ayah_number' => fake()->randomNumber(3),
            'arabic_text' => fake()->text(),
            'translation_id' => fake()->text(),
            'translation_en' => fake()->text(),
        ];
    }
}
