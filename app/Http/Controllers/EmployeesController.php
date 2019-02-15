<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = new Employee();
        var_dump($employees->GetAllEmployees());
        //return view('employees.index', [$employees]);
    }
}
