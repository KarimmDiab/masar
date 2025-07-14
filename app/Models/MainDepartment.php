<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainDepartment extends Model
{
    /** @use HasFactory<\Database\Factories\MainDepartmentFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'sector_id'
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function subDepartment()
    {
        return $this->hasMany(SubDepartment::class);
    }

    public function emp()
    {
        return $this->hasMany(Emp::class);
    }
}
