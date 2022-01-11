<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_id',
        'emp_fullname',
        'emp_address',
        'emp_department',
        'emp_email',
        'salary',
        'gender',
    ];
}
