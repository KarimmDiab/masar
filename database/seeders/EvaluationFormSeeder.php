<?php

namespace Database\Seeders;

use App\Models\EvaluationForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EvaluationForm::create([
            'form_name' => 'استمارة تقييم الاداء الوظيفي للموظفين',
        ]);
        EvaluationForm::create([
            'form_name' => 'استمارة تقييم الاداء الوظيفي لمديرين المراكز و المتابعات',
        ]);
        EvaluationForm::create([
            'form_name' => 'استمارة تقييم للمركز',
        ]);
        EvaluationForm::create([
            'form_name' => 'استمارة تقييم للسيارات',
        ]);
    }
}