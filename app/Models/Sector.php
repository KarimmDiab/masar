<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    /** @use HasFactory<\Database\Factories\SectorFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'name'
    ];

    public function mainDepartment()
    {
        return $this->hasMany(MainDepartment::class);
    }
}
