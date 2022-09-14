<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
   public function create(Request $request){
    $employees = new Employee;
    $employees->ID_number = $request->ID_number;
    $employees->employee_name =$request->employee_name;
    $employees->email_address =$request->email_address;
    $employees->login_password =Hash::make($request->login_password);
    $employees->employee_image =$request->employee_image;
    $employees->department= $request->department;
    $employees->save();
   
    return redirect()->route('employeelist')->with('success', 'New employee added.');
   }
}
