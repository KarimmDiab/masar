<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'branch_id',
        'name',
        'sectionable_type',
        'sectionable_id'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function sectionable()
    {
        return $this->morphTo();
    }
}
