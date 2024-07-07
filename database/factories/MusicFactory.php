<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'music name' => $this->faker->sentence(),
            'singer' => $this->faker->name(),
            'year' => $this->faker->year(),
            'description' => $this->faker->paragraph(2)
        ];
    }
}
