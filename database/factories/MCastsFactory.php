<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MCasts>
 */
class MCastsFactory extends Factory
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
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(1, 60),
            'biodata' => $this->faker->text,
            'avatar' => $this->faker->imageUrl,
        ];
    }
}
