<?php

namespace Database\Factories;
use App\Models\StudentRep;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentRepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'email' => $this->faker->unique(true)->safeEmail(),
        ];
    }
}
