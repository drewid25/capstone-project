<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function store(Request $request){
    
        $request->validate([
      'company_name'=>'required',   
      'company_add'=>'required',
      'email' =>['required', 'email', Rule::unique('users','email')],
     'company_logo'=>'required|mimes:jpg,png,jpeg|max:5048',
      'password' => 'required|confirmed|min:6'
     ]);
     $request['password'] = Hash::make( $request['password']);
     $newUserImage = time() . '-' .$request->company_name. "."  .$request->company_logo->extension();
     $request->company_logo->move(public_path('images'),$newUserImage);
     $company = Company::create([
        'company_name'=>$request->input('company_name'),
        'company_add'=> $request->input('company_add'),
        'email'=>$request->input('email'),
        'company_logo'=>$newUserImage ,        
        'password'=>$request->input('password'),
      ]);
  
  
     return redirect('/companylanding');
  
  }
}
