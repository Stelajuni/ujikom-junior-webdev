<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('name') -> get();
        $data['employees'] = $employees;

        return view('pages.employee', $data);
    }

    public function showDashboard()
    {
        $employees = Employee::all(); // Fetch all employees from the database
        return view('pages.dashboard', compact('employees')); // Pass the employees data to the view
    }
}
