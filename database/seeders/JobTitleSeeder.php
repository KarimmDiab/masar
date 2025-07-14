<?php

namespace Database\Seeders;

use App\Models\JobTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobTitle::create([
            'title' => 'مدير عام',
        ]);
        JobTitle::create([
            'title' => 'مدير إدارة',
        ]);
        JobTitle::create([
            'title' => 'رئيس قسم',
        ]);
        JobTitle::create([
            'title' => 'مدير مركز',
        ]);
        JobTitle::create([
            'title' => 'مشرف إدارة',
        ]);
        JobTitle::create([
            'title' => 'أخصائي خدمة عملاء',
        ]);
        JobTitle::create([
            'title' => 'أخصائي تقييم أداء و جودة خدمة',
        ]);

    }
}
