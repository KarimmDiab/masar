<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnswerEvaluation extends Model
{
    /** @use HasFactory<\Database\Factories\AnswerEvaluationFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'answer_evaluationable',
        'evaluation_form_id',
        'evaluation_question_id',
        'score',
    ];
}
