<?php

namespace Database\Factories;

use App\Models\Ayahs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\qiraats>
 */
class qiraatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ayah_id' => Ayahs::factory(),
            'qiraat_name' => fake()->sentence(2),
            'qiraat_ayah' => fake()->text(),
            'audio_path' => fake()->sentence(1),
        ];
    }
}
