<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MMovies>
 */
class MMoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->text,
            'synopsis' => $this->faker->text,
            'poster' => $this->faker->imageUrl,
            'year' => $this->faker->text,
            'available' => $this->faker->boolean,
            'genre' => $this->faker->text,
        ];
    }
}
