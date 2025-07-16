<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EvaluationQuestions extends Model
{
    /** @use HasFactory<\Database\Factories\EvaluationQuestionsFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'question_text',
        'evaluation_form_id',
        'max_score'
    ];

    public function evaluationForm()

    {
        return $this->belongsTo(EvaluationForm::class);
    }

    public function evaluationAnswers()
    {
        return $this->hasMany(AnswerEvaluation::class);
    }
}
