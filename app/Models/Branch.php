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



    public function branchable()
    {
        return $this->morphTo();
    }

    public function sectionable()
    {
        return $this->morphMany(Section::class, 'sectionable');
    }

    public function emp()
    {
        return $this->hasMany(Emp::class);
    }

    //public function user()
    //{
    //    return $this->hasMany(User::class);
    //}

}
