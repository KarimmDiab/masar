<?php

namespace Database\Factories;

use App\Models\EvaluationForm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationQuestions>
 */
class EvaluationQuestionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_text' => $this->faker->sentence(6),
            'evaluation_form_id' => EvaluationForm::inRandomOrder()->first()->id,
            'max_score' => $this->faker->numberBetween(5,10)
        ];
    }
}
