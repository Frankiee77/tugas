<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MProfiles>
 */
class MProfilesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 10),
            'biodata' => $this->faker->text,
            'age' => $this->faker->numberBetween(1, 60),
            'address' => $this->faker->address,
            'avatar' => $this->faker->imageUrl,
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
