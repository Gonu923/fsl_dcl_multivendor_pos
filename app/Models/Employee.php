<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Employee extends Model
{
    protected $fillable = [
        'employee_name',
        'employee_uid',
        'employee_salary',
        'employee_designation',
        'employee_working_area',
        'employee_live_location',
        'employee_photo',
        'salary_status',
        'password',
    ];

    public function getAvatarUrl()
    {
        return Storage::url($this->employee_photo);
    }
}
