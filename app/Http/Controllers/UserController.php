<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function show(){
        return view('admin.register');
    }

    public function store(Request $request){
      $request->validate([
    "company_name"=>['required','min:4'],
    "company_logo"=>'required|mimes:jpg,png,jpeg|max:5048',
    "email" =>['required', 'email', Rule::unique('users','email')],
    "admin_name"=>['required','min:4'],
    "admin_image"=>'required|mimes:jpg,png,jpeg|max:5048',
    "password" => 'required|confirmed|min:6'
   ]);
   $request['password'] = Hash::make( $request['password']);
   
   $newLogoName = time() . '-' .$request->company_name. "."  .$request->company_logo->extension();

 
   $newUserImage = time() . '-' .$request->user_name. "."  .$request->admin_image->extension();
   $request->company_logo->move(public_path('images'),$newLogoName);
   $request->admin_image->move(public_path('images'),$newUserImage);
   $user = User::create([
      'company_name'=>$request->input('company_name'),
      'company_logo'=> $newLogoName,
      'email'=>$request->input('email'),
      'admin_name'=>$request->input('admin_name'),
      'admin_image'=>$newUserImage ,
      'password'=>$request->input('password'),
    ]);


   auth()->login($user);
   return redirect('/dashboard');

}
public function process(Request $request){
   $validated = $request->validate([
      "admin_name" => 'required',
      "password" => 'required'
   ]);
   if(auth()->attempt($validated)){
      $request->session()->regenerate();

      return redirect('/dashboard')->with('message', 'Welcome back!'. $validated['admin_name']. "!");
   }
   else{
     
return redirect('/login')->with('message', "Admin name does not exist!");
   }
}
public function logout(Request $request){
   auth()->logout();
   $request->session()->invalidate();
   $request->session()->regenerateToken();

   return redirect('/')->with('message','logout succesful');

}
}