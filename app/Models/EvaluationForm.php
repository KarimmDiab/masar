<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EvaluationForm extends Model
{
    /** @use HasFactory<\Database\Factories\EvaluationFormFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'form_name'
    ];


    public function questions()
    {
        return $this->hasMany(EvaluationQuestions::class);
    }

    public function finalEvaluations()
    {
        return $this->hasMany(FinalEvaluation::class);
    }

}
