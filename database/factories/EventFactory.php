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
            'title' => $this->faker->title('Patata'),
            'image' => $this->faker->image(),
            'description' => $this->faker->description('hola'),
            'time' => $this->faker->time(),
            'date' => $this->faker->date(),
            'people' => $this->faker->people(),
        ];
    }
}
