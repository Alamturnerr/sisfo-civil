<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(20),
            'status' => '1'
        ];
    }
}