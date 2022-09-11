<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('user.login');
    }
    public function show(){
        return view('user.register');
    }

    public function store(Request $request){
     $validated = $request->validate([
    "company_name"=>['required','min:4'],
    "company_logo"=>'required',
    "email" =>['required', 'email', Rule::unique('users','email')],
    "user_name"=>['required','min:4'],
    "user_image"=>'required',
    "password" => 'required|confirmed|min:6'
   ]);
   $validated['password'] = Hash::make( $validated['password']);
   $user =User::create($validated);


   auth()->login($user);
   return redirect('/login');

}
public function process(Request $request){
   $validated = $request->validate([
      "user_name" => 'required',
      "password" => 'required'
   ]);
   if(auth()->attempt($validated)){
      $request->session()->regenerate();

      return redirect('/')->with('message', 'Welcome'.$validated['user_name']. '!');
   }
}
public function logout(Request $request){
   auth()->logout();
   $request->session()->invalidate();
   $request->session()->regenerateToken();

   return redirect('/login')->with('message','logout succesful');

}
}