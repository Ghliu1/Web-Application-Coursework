<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => $this->faker->word(),
            'text' => $this->faker->paragraph(),
            'student_id' => $this->faker->unique()->numberBetween(1,count(Student::get())),
        ];
    }
}
