<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FlightDetail>
 */
class FlightDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'flight_source'      => $this->faker->word(),
            'flight_destination' => $this->faker->word(),
            'departing_date'     => $this->faker->dateTimeThisMonth(),
            'returning_date'     => $this->faker->dateTimeThisMonth(),
            'departure_time'     => $this->faker->time(),
            'arrival_time'     => $this->faker->time(),
        ];
    }
}
