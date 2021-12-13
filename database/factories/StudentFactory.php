<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
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
            'year_group' => $this->faker->unique()->numberBetween(0,4),
            'student_number' => $this->faker->unique(true)->numberBetween(1,10000),
            'email' => $this->faker->unique(true)->safeEmail(),
        ];
    }
}
