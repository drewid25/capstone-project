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
      $request->validate([
    "company_name"=>['required','min:4'],
    "company_logo"=>'required|mimes:jpg,png,jpeg|max:5048',
    "email" =>['required', 'email', Rule::unique('users','email')],
    "user_name"=>['required','min:4'],
    "user_image"=>'required|mimes:jpg,png,jpeg|max:5048',
    "password" => 'required|confirmed|min:6'
   ]);
   $request['password'] = Hash::make( $request['password']);
   
   $newLogoName = time() . '-' .$request->company_name. "."  .$request->company_logo->extension();

 
   $newUserImage = time() . '-' .$request->user_name. "."  .$request->user_image->extension();
   $request->company_logo->move(public_path('images'),$newLogoName);
   $request->user_image->move(public_path('images'),$newUserImage);
   $user =User::create([
      'company_name'=>$request->input('company_name'),
      'company_logo'=> $newLogoName,
      'email'=>$request->input('email'),
      'user_name'=>$request->input('user_name'),
      'user_image'=>$newUserImage ,
      'password'=>$request->input('password'),
    ]);


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