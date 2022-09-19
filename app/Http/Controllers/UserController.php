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
    'id_number'=>'required',   
    'name'=>'required|min:4',
    'email' =>['required', 'email', Rule::unique('users','email')],
   'employee_image'=>'required|mimes:jpg,png,jpeg|max:5048',
   'department'=>'required',
   'usertype' =>'required',
    'password' => 'required|confirmed|min:6'
   ]);
   $request['password'] = Hash::make( $request['password']);
   $newUserImage = time() . '-' .$request->user_name. "."  .$request->employee_image->extension();
   $request->employee_image->move(public_path('images'),$newUserImage);
   $user = User::create([
      'id_number'=>$request->input('id_number'),
      'name'=> $request->input('name'),
      'email'=>$request->input('email'),
       'employee_image'=>$newUserImage ,
       'department'=>$request->input('department'),
       'usertype' =>$request->input('usertype'),
       
      'password'=>$request->input('password'),
    ]);


   return redirect('/dashboard');

}
public function process(Request $request){

   $validated = $request->validate([
      "id_number" => 'required',
      "password" => 'required',
      "usertype" => 'required'
   ]);
   if(auth()->attempt($validated)){
      $request->session()->regenerate();
      $usertype= $validated['usertype'];
    

      if($usertype == 'admin'){
         return redirect('/dashboard')->with('message', 'Welcome back!');
      }elseif($usertype == 'employee'){
         return redirect('/employee/dashboard');
      }
      
   }
   else{
     
return redirect('/')->with('message', "Admin name does not exist!");
   }
}
public function logout(Request $request){
   auth()->logout();
   $request->session()->invalidate();
   $request->session()->regenerateToken();

   return redirect('/')->with('message','Logout Succesful!');

}
}