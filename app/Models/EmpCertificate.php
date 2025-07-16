<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmpCertificate extends Model
{
    /** @use HasFactory<\Database\Factories\EmpCertificateFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'emp_id',
        'provided_by',
        'issued_date'
    ];

    public function emp()
    {
        return $this->belongsTo(Emp::class);
    }
}
