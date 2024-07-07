<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car name' => $this->faker->name(),
            'company' => $this->faker->company(),
            'year' => $this->faker->year(),
            'mileage' => $this->faker->numberBetween(500, 100000),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->numberBetween(1000, 50000),
        ];
    }
}
