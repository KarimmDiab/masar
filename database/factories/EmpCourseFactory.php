<?php

namespace Database\Factories;

use App\Models\Emp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmpCourse>
 */
class EmpCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'emp_id' => Emp::inRandomOrder()->first()->id,
            'prvided_by' => $this->faker->company(),
            'course_date' => $this->faker->date()
        ];
    }
}
