<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PostCategory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(75),
            'thumbnail' => $this->faker->imageUrl(1920, 1080, 'animals', true),
            'slug' => Str::slug($this->faker->slug()),
            'post_category_id' => \App\Models\PostCategory::inRandomOrder()->first()->id,
            'total_visited' => 0
        ];
    }
}
