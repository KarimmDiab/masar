<?php

namespace Database\Seeders;

use App\Models\MainDepartment;
use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MainDepartment::create([
            'name' => 'الإدارة العامة لخدمة العملاء',
        'sector_id' => Sector::inRandomOrder()->first()->id,
        ]);
    }
}
