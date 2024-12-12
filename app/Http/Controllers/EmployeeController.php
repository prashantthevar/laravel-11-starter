<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Display all employees
    public function index()
    {
        $employees = Employee::all();
        return $employees;
    }
}

