<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Section;
use App\Models\SubDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create([
            'name' => 'مركز خدمة عملاء',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
        Section::create([
            'name' => 'متابعة خدمة عملاء',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
        Section::create([
            'name' => 'قسم الخدمات الألكترونية شرق',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
        Section::create([
            'name' => 'قسم الخدمات الألكترونية وسط',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
        Section::create([
            'name' => 'قسم الخدمات الالكترونية غرب',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
        Section::create([
            'name' => 'قسم الخدمات الالكترونية جنوب',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
        Section::create([
            'name' => 'قسم تقييم الاداء و جودة الخدمة شرق',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
        Section::create([
            'name' => 'قسم تقييم الاداء و جودة الخدمة وسط',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
        Section::create([
            'name' => 'قسم تقييم الاداء و جودة الخدمة غرب',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);

        Section::create([
            'name' => 'قسم تقييم الاداء و جودة الخدمة جنوب',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
                Section::create([
            'name' => 'قسم التعاقد المنزلي شرق و وسط',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
                Section::create([
            'name' => 'قسم التعاقد المنزلي غرب و جنوب',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
                        Section::create([
            'name' => 'المنافذ الخارجية',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
                        Section::create([
            'name' => 'السيارات المتنقلة',
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'sectionable_type' => 'App\Models\SubDepartment',
            'sectionable_id' => SubDepartment::inRandomOrder()->first()->id
        ]);
    }
}
