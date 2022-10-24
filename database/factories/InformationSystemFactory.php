<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InformationSystemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = [
            'Daerah Rawan',
            'Daerah Strategis'
        ];

        return [
            'title' => $this->faker->sentence(),
            'province' => $this->faker->state(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'description' => $this->faker->text,
            'status' => $status[rand(0, count($status) - 1)],
            'x' => $this->faker->longitude($min = 5.607364291948207, $max = -2.7271487041181195),
            'y' => $this->faker->longitude($min = 95.48446803247931, $max = 141.02168078923106),
            'thumbnail' => $this->faker->imageUrl(1920, 1080, 'animals', true)
        ];
    }
}
