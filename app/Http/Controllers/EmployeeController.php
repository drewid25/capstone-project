<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function create(Request $request){
    $employees = new Employee;
    $employees->ID_number = $request->ID_number;
    $employees->employee_name =$request->employee_name;
    $employees->department= $request->department;
    $employees->save();
   
    return redirect()->route('employeelist')->with('success', 'New employee added.');
   }
}
