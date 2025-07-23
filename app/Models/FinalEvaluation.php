<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinalEvaluation extends Model
{
    /** @use HasFactory<\Database\Factories\FinalEvaluationFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'evaluation_form_id',
        'user_id',
        'final_score',
        'evaluation_date',
        'grade',
        'comments',
        'final_evaluationable_type',
        'final_evaluationable_id',
    ];

     public function form() {
        return $this->belongsTo(EvaluationForm::class);
    }

    public function evaluated() {
        return $this->morphTo();
    }
}
