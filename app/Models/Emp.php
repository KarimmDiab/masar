<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emp extends Model
{
    /** @use HasFactory<\Database\Factories\EmpFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'agent_code',
        'name',
        'national_id',
        'gender',
        'birth_date',
        'phone',
        'hiring_date',
        'marital_statis_id',
        'working_hour_id',
        'job_title_id',
        'contract_id',
        'section_id',
        'branch_id',
        'main_department_id',
        'sub_department_id'
    ];

    public function maritalStatus()
    {
        return $this->belongsTo(MaritalSatatus::class);
    }

        public function workingHours()
    {
        return $this->belongsTo(WorkingHour::class);
    }

        public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }

        public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

        public function section()
    {
        return $this->belongsTo(Section::class);
    }

        public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

        public function mainDepartment()
    {
        return $this->belongsTo(MainDepartment::class);
    }

        public function subDepartment()
    {
        return $this->belongsTo(SubDepartment::class);
    }

    public function courses()
    {
        return $this->hasMany(EmpCourse::class);
    }

    public function certificates()
    {
        return $this->hasMany(EmpCertificate::class);
    }

}
