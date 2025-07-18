<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contract::create([
            'type' => 'مثبت'
        ]);
        Contract::create([
            'type' => 'عقد مميز'
        ]);
        Contract::create([
            'type' => 'سركي'
        ]);
        Contract::create([
            'type' => 'خدمة عامة'
        ]);
    }
}
