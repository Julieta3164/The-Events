<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'image' => $this->faker->name(),
            'description' => $this->faker->name(),
            'time' => $this->faker->name(),
            'date' => $this->faker->name(),
            'people' => $this->faker->name(),
        ];
    }
}
