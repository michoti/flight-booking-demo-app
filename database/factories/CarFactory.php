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
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'location' => $this->faker->word(),
            'bodytype' => $this->faker->word(),
            'year' => $this->faker->numberBetween(2006,2021),
            'fueltype' => $this->faker->word(),
            'transmission' => $this->faker->word(),
        ];
    }
}
