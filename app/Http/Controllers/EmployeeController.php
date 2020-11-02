<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function listEmployees()
    {
    	return Employee::get();
    }

    public function getEmployee(Request $request)
    {
    	return Employee::findOrFail($request->id);
    }

    public function createEmployee(Request $request) 
    {
    	$employee = new Employee($request->all());
    	$employee->save();

    	return $employee;
    }

    public function editEmployee(Request $request)
    {
    	$employee = Employee::findOrFail($request->id);
    	$employee->update($request->all());

    	return $employee;
    }

    public function deleteEmployee(Request $request)
    {
    	Employee::findOrFail($request->id)->delete();
    }

}
