<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Job;

class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'file'  => $this->faker->mimeType(),
            'job_id' => \App\Models\Job::inRandomOrder()->first()->id
        ];
    }
}
