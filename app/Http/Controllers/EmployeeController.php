<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Property;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    // Admin Dashboard
    public function addemployee()
    {
        $companies = Company::all();
        return view('admin.employee.add', compact('companies'));
    }
    public function employeelist()
    {
        $companies = Company::all();
        $users = User::all();
        return view('admin.employee.list', compact('users', 'companies'));
    }
    public function employeeUpdate($id)
    {
        $users = User::find($id);
        $companies = Company::all();
        return view('admin.employee.update', compact('users', 'companies'));
    }


    // Employee Dashboard 
    public function employeeDashboard()
    {
        $inventories = Property::all();
        $companies = Company::all();
        return view('employee.dashboard', compact('inventories', 'companies'));
    }
    public function employeeProfile()
    {
        $users = Property::all();
        return view('employee.profile', compact('users'));
    }
}
