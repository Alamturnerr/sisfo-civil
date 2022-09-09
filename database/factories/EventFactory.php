<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'name' => $this->faker->sentence(),    
            'price' => $this->faker->numberBetween(50000, 1000000),
            'location' => $this->faker->address(),
            'description' => $this->faker->paragraph(30),
            'date_time' => $this->faker->dateTime(),
            'link' =>  $this->faker->url(),
            'poster' => $this->faker->imageUrl(700, 900, 'animals', true),
            'slug' => Str::slug($this->faker->slug()),
            'total_visited' => 0
        ];
    }
}
