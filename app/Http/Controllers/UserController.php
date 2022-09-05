<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
public function create(){
   return view('user.create');
}
public function register(){
   return view('user.register');
}
public function store(Request $request){
   $validated = $request->validate([
       "user_name" => ['required', 'min:4'],
       "email" => ['required', 'email', Rule::unique('users', 'email')],
       'password' => 'required|confirmed|min:6'
   ]);

   $validated['password'] = bcrypt($validated['password']);

   $user = User::create($validated);
    
   auth()->login($user);

}
   public function show($id){
      $data =["data" => "data from database"];
      return view('user')
             ->with('data', $data)   
             ->with('name', 'Andrew')   
             ->with('age', 25)  
             ->with('email', 'andrew@gamail.com');
              
   }
   public function dashboard(){
      return view('user.dashboard');
   }
};
