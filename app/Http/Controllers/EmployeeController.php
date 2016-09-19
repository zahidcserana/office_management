<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmployeeController extends Controller
{
    public function Home()
    {
    	return view('employee.employee_list');

    }
}
