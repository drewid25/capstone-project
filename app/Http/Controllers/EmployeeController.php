<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Validator;
class EmployeeController extends Controller
{
//    public function store(Request $request){
//   $request->validate([
//    'ID_number' => 'required',
//    'employee_name' => 'required',
//    'employee_image' =>'required|mimes:jpg,png,jpeg|max:5048',
//    'login_password' =>'required|confirmed|min:6',
//    'department'=>'required'
//   ]);
//     $request['login_password'] =Hash::make($request['login_password']);
//     $newEmployeeImage =time(). '-' .$request->employee_name. "." .$request->employee_image->extension();
//     $request->employee_image->move(public_path('images'),$newEmployeeImage);
    
//     $employees = Employee::create([
//       'ID_number'=>$request->input('ID_number'),
//       'employee_name'=>$request->input('employee_name'),
//       'email_address'=>$request->input('email_address'),
//       'employee_image'=>$newEmployeeImage,
//       'login_password'=>$request->input('login_password'),
//       'department'=> $request->input('department')
//     ]);
   
//     auth()->login($employees);
//     dd($employees);
//     return redirect('/dashboard');
//   }
public function create(Request $request){
   $employees = new Employee;
   $employees ->ID_number = $request->ID_number;
   $employees ->employee_name = $request->employee_name;
   $employees ->email_address = $request->email_address;
   $employees ->employee_image = $request->employee_image;
   $employees ->login_password = $request->login_password;
   $employees ->department =$request->department;
   $employees->save();
   return redirect('/employeelist');
}
    
   
   public function update(Request $request){
      $employees = Employee::find($request->employee_id);
      $employees ->ID_number = $request->ID_number;
      $employees ->employee_name = $request->employee_name;
      $employees ->email_address = $request->email_address;
      $employees ->employee_image = $request->employee_image;
      $employees ->department =$request->department;
   
      $employees->save();
  
      return redirect()->route('dashboard')->with('success', 'Employee updated.');
   }

  
   public function process(Request $request){
      $validated = $request->validate([
         "ID_number" => 'required',
         "login_password" => 'required'
      ]);
      if(auth()->attempt($validated)){
         $request->session()->regenerate();
   
         return redirect('/employee/dashboard')->with('message', 'Welcome back!'. $validated['ID_number']. "!");
      }
      else{
   return redirect('/login')->with('message', "Admin name does not exist!");
      }
   }

   
  
}
