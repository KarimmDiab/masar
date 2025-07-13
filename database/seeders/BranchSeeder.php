<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\MainDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::create([
            'name' => 'فرع البلد',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع محرم بك',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع الإبراهيمية',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع الرمل',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع سيدي بشر',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع المندرة',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع القباري',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع الساحل',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع العجمي',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع العامرية',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع أبوقير',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع برج العرب',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع النزهه',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع النوبارية',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع البلد',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع اكتوبر',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع مريوط',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع السيوف',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        Branch::create([
            'name' => 'فرع مرغم',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
    }
}
