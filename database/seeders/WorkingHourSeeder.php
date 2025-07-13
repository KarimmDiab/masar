<?php

namespace Database\Seeders;

use App\Models\WorkingHour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkingHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkingHour::create([
            'working_hours' => 'ساعات عمل اضافي'
        ]);
        WorkingHour::create([
            'working_hours' => 'اجازة رعاية مولود'
        ]);
        WorkingHour::create([
            'working_hours' => 'اجازة بدون مرتب'
        ]);
        WorkingHour::create([
            'working_hours' => 'ساعات عمل اساسية'
        ]);
    }
}
