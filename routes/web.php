<?php

use App\Http\Controllers\PropertyController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;
use App\Models\Property;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();
// Route::permanentRedirect('/welcom','/');
// Route::redirect('/welcome','/')


// Home Route
Route::get('/', function (){
    return view('landingpage');
})->name('dashboard');

// Dashboard Route
Route::get('/dashboard', function (){
    return view('admin.dashboard')->with('inventories',Property::all());
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
    return view('admin.addemployee');
})->name('addemployee');

Route::get('/employeelist',function (){
    return view('admin.employeelist')->with('users',User::all());
})->name('employeelist');

Route::get('/employee/dashboard/',function(){
    return view('employee.dashboard')->with('inventories',Property::all());
})->middleware(['auth'])->name('dashboard');

Route::get('/employee/profile/{id}', function($id){
    return view('employee.profile')->with('users',User::find($id));
});



Route::post('updateemployee',[UserController::class,'update'])->name('updateemployee');

Route::get('employeeupdate/{id}',
function($id){
    return view('admin.employeeupdate')->with('employee',User::find($id));
})->name('employeeupdate');
Route::post('getproperties',function(Request $request){
    $user = User::find($request->id);
    
    $properties = $user->properties;
    
    return json_encode($properties);
})->name('getproperties');


// Property Routes
Route::post('/createproperty',[PropertyController::class,'create'])->name('createproperty');

Route::get('/addproperty',function(){
    return view('admin.addproperty')->with('users',User::all());
});
Route::post('/updateproperty',
    [PropertyController::class, 'update']
)->name('updateproperty');



Route::get('propertyupdate/{id}',
function($id){
    return view('admin.propertyupdate')->with('property',Property::find($id));
})->name('propertyupdate');

// Inventory Routes
Route::get('/inventory',function(){

    return view('admin.inventory')->with('inventories', Property::all());
})->name('inventories');


// Change password Routes
Route::post('passwordchange',[UserController::class,'change'])->name('passwordchange');

Route::get('/employee/change-password/', function(){
    return view('employee.changepassword');
})->name('changepassword');