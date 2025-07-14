<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Contract;
use App\Models\JobTitle;
use App\Models\MainDepartment;
use App\Models\MaritalSatatus;
use App\Models\Section;
use App\Models\SubDepartment;
use App\Models\WorkingHour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emp>
 */
class EmpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agent_code' => $this->faker->unique(),
            'name' => $this->faker->name(),
            'national_id' => $this->faker()->unique()->numerify('##############'),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'birth_date' => $this->faker->date(),
            'phone' => $this->faker->numerify('01#########'),
            'hiring_date' => $this->faker->date(),
            'marital_statis_id' => MaritalSatatus::inRandomOrder()->first()->id,
            'working_hour_id' => WorkingHour::inRandomOrder()->first()->id,
            'job_title_id' => JobTitle::inRandomOrder()->first()->id,
            'contract_id' => Contract::inRandomOrder()->first()->id,
            'section_id' =>Section::inRandomOrder()->first()->id,
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
            'sub_department_id' => SubDepartment::inRandomOrder()->first()->id,
        ];
    }
}
