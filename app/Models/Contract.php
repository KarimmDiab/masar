<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    /** @use HasFactory<\Database\Factories\ContractFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type'
    ];

    public function emp()
    {
        return $this->hasMany(Emp::class);
    }
}
