<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function create(){
   return view('user.create');
}
   public function show($id){
      $data =["data" => "data from database"];
      return view('user')
             ->with('data', $data)   
             ->with('name', 'Andrew')   
             ->with('age', 25)  
             ->with('email', 'andrew@gamail.com');
              
   }
};
