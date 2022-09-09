<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RepositoryCategory;

class RepositoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = [
            'Modul',
            'Buku',
            'Jurnal',
        ];
        
        return [
            'title' => $this->faker->sentence(),
            'type' => $type[rand(0, count($type) - 1)],
            'file'  => $this->faker->mimeType(),
            'repository_category_id' => \App\Models\RepositoryCategory::inRandomOrder()->first()->id,
        ];
    }
}
