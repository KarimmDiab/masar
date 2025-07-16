<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkingHour extends Model
{
    /** @use HasFactory<\Database\Factories\WorkingHourFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'working_hours'
    ];

    public function emp()
    {
        return $this->hasMany(Emp::class);
    }
}
