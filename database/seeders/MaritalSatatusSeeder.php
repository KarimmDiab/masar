<?php

namespace Database\Seeders;

use App\Models\MaritalSatatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalSatatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaritalSatatus::create([
            'status' => 'متزوج'
        ]);
        MaritalSatatus::create([
            'status' => 'أعزب'
        ]);
        MaritalSatatus::create([
            'status' => 'متزوج و يعول أولاد'
        ]);
        MaritalSatatus::create([
            'status' => 'أرمل أو مطلق'
        ]);
        MaritalSatatus::create([
            'status' => 'مطلق و يعول أولاد'
        ]);
    }
}
