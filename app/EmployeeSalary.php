<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeSalary extends Model
{
    //
    protected $table = 'employee_salaries';
    //protected $fillable = ['employee_id', 'salary','salary_type','updated_at','created_at'];

    public function employees()
    {
        return $this->belongsTo('App\User', 'employee_id');
    }
}
