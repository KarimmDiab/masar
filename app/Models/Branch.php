<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    /** @use HasFactory<\Database\Factories\BranchFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'main_department_id,'
    ];

    public function mainDepartment()
    {
        return $this->belongsTo(MainDepartment::class);
    }

    public function emp()
    {
        return $this->hasMany(Emp::class);
    }

    public function section()
    {
        return $this->hasMany(Section::class);
    }

    public function subDepartment()
    {
        return $this->belongsTo(SubDepartment::class);
    }
}
