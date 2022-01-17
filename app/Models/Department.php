<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'dept_id',
        'dept_name',
        'number_of_emp',
        'dept_email',
        'manager_name'
    ];
    use HasFactory;
}
