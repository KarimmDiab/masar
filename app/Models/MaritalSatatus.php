<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaritalSatatus extends Model
{
    /** @use HasFactory<\Database\Factories\MaritalSatatusFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status'
    ];

    public function emp()
    {
        return $this->hasMany(Emp::class);
    }
}

