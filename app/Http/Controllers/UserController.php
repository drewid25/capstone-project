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
public function change(Request $request){
   if (!(Hash::check($request->get('current_password'), auth()->user()->password))) {
      // The passwords matches
      return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
  }

  if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
      //Current password and new password are same
      return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
  }

  $validatedData = $request->validate([
      'current_password' => 'required',
      'new_password' => 'required|string|min:6|confirmed',
  ]);
  $validatedData['current_password'] = Hash::make($validatedData['current_password']) ;
  $validatedData['new_password'] = Hash::make($validatedData['new_password']) ;
  //Change Password


 
 
  $users = User::find(Auth::user()->id);
 
   $users->password =$validatedData['new_password'];

   $users->save();

  return redirect('/login')->with('success', 'password changed successfully updated.');

}
}