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

    public function branchable()
    {
        return $this->morphMany(Branch::class, 'branchable');
    }


    public function sectionable()
    {
        return $this->morphMany(Section::class, 'sectionable');
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
