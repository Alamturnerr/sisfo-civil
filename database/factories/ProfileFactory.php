<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->paragraph(30),
            'vision' => $this->faker->paragraph(20),
            'mission' => $this->faker->paragraph(30)
        ];
    }
}
