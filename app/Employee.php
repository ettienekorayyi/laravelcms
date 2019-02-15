<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Employee extends Model
{
    //protected $primaryKey = "employee_id";   

    public function GetAllEmployees()
    {        
        return DB::table('employees')
            ->select('first_name', 'last_name', 'department_name')
            ->join('departments', 'employees.department_id', 'departments.department_id')
            ->get();
    }

    
}
