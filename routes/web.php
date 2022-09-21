<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PropertyController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;
use App\Models\Property;
use App\Models\User;
use App\Models\Admin;
use App\Models\Company;
use Illuminate\Http\Request;





// Home Route
Route::get('/companylanding', function (){
    return view('landingpage')->with('company',Company::all());
})->name('dashboard');

// Dashboard Route
Route::get('/dashboard', function (){
    return view('admin.dashboard')->with('inventories',Property::all())->with('companies',Company::all());
})->middleware(['auth'])->name('dashboard');

//  Login/logout  Route
Route::get('/login',function(){
    return view('admin.login');
})->name('login');
Route::post('/login/process',[UserController::class, 'process']);
Route::post('/logout',[UserController::class, 'logout']);

// User Register Route
Route::get('/register',function(){
    return view('admin.register');
})->name('register');

Route::post('/user',[UserController::class,'store']);

// Employe Route
Route::get('/addemployee',function(){
    return view('admin.addemployee')->with('companies',Company::all());
})->name('addemployee');

Route::get('/employeelist',function (){
    return view('admin.employeelist')->with('users',User::all())->with('companies',Company::all());
})->name('employeelist');

Route::get('/employee/dashboard/',function(){
    return view('employee.dashboard')->with('inventories',Property::all())->with('companies',Company::all());
})->middleware(['auth'])->name('dashboard');

Route::get('/employee/profile/{id}', function($id){
    return view('employee.profile')->with('users',User::find($id));
});



Route::post('updateemployee',[UserController::class,'update'])->name('updateemployee');

Route::get('employeeupdate/{id}',
function($id){
    return view('admin.employeeupdate')->with('employee',User::find($id))->with('companies',Company::all());
})->name('employeeupdate');
Route::post('getproperties',function(Request $request){
    $user = User::find($request->id);
    
    $properties = $user->properties;
    
    return json_encode($properties);
})->name('getproperties');


// Property Routes
Route::post('/createproperty',[PropertyController::class,'create'])->name('createproperty');

Route::get('/addproperty',function(){
    return view('admin.addproperty')->with('users',User::all())->with('companies',Company::all());
});
Route::post('/updateproperty',
    [PropertyController::class, 'update']
)->name('updateproperty');



Route::get('propertyupdate/{id}',
function($id){
    return view('admin.propertyupdate')->with('property',Property::find($id))->with('companies',Company::all());
})->name('propertyupdate');

// Inventory Routes
Route::get('/inventory',function(){

    return view('admin.inventory')->with('inventories', Property::all())->with('companies',Company::all());
})->name('inventories');


Route::get('/signin',function(){

    return view('company.signin');
});
Route::get('/',function(){

    return view('company.landingpage');
});
Route::get('/companyreg',function(){

    return view('company.companyreg');
});
Route::post('companyreg', [CompanyController::class, 'store']);
    

Route::get('/home', function(){
    return view('company.landingpage');
});

// Change password Routes
Route::post('passwordchange',[UserController::class,'change'])->name('passwordchange');

Route::get('/employee/change-password/', function(){
    return view('employee.changepassword')->with('companies',Company::all());
})->name('changepassword');

