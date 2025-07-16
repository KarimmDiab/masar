<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubDepartment extends Model
{
    /** @use HasFactory<\Database\Factories\SubDepartmentFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'main_department_id'
    ];

    public function mainDepartment()
    {
        return $this->belongsTo(MainDepartment::class);
    }


    public function emp()
    {
        return $this->hasMany(Emp::class);
    }


    public function branchable()
    {
        return $this->morphMany(Branch::class, 'branchable');
    }


    public function sectionable()
    {
        return $this->morphMany(Section::class, 'sectionable');
    }
}
