<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = "employee";

    protected $fillable = ['first_name', 'last_name', 'role', 'email',
    'password','phone','address','gender','dob','join_date',
    'job_type','city','salary','age','image',];


}
