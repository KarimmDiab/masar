<?php

namespace Database\Seeders;

use App\Models\MainDepartment;
use App\Models\SubDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubDepartment::create([
            'name' => 'إدارة خدمة عملاء فروع شرق',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        SubDepartment::create([
            'name' => 'إدارة خدمة عملاء فروع وسط',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        SubDepartment::create([
            'name' => 'إدارة خدمة عملاء فروع غرب',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        SubDepartment::create([
            'name' => 'إدارة خدمة عملاء فروع جنوب',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        SubDepartment::create([
            'name' => 'إدارة تقييم الاداء و جودة الخدمة',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        SubDepartment::create([
            'name' => 'إدارة الخدمات الإلكترونية و التعاقد المنزلي',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
        SubDepartment::create([
            'name' => 'إدارة المنافذ الخارجية و السيارات المتنقلة',
            'main_department_id' => MainDepartment::inRandomOrder()->first()->id,
        ]);
    }
}
