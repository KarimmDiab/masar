<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobTitle extends Model
{
    /** @use HasFactory<\Database\Factories\JobTitleFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title'
    ];

    public function emp()
    {
        return $this->hasMany(Emp::class);
    }
}
