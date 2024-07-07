<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Desk>
 */
class DeskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'desk name' => $this->faker->name(),
            'company' => $this->faker->company(),
            'year' => $this->faker->numberBetween(2020, date('Y')),
            'description' => $this->faker->paragraph(2)
        ];
    }
}
