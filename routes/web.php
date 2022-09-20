<!-- 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ -->
<!-- 
// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();
// Route::permanentRedirect('/welcom','/');
// Route::redirect('/welcome','/') -->


<!-- // // Route::get('/register',[UserController::class,'register']);
// Route::get('/', function (){
//     return view('landingpage');
// })->name('dashboard');
// Route::get('/dashboard', function (){
//     return view('admin.dashboard')->with('inventories',Property::all());
// })->middleware(['auth'])->name('dashboard');



// // Property Routes
// Route::post('/createproperty',[PropertyController::class,'create'])->name('createproperty');
// Route::get('/addproperty',function(){
//     return view('admin.addproperty')->with('users',User::all());
// }); -->




<!-- // // Employee Routes

// Route::get('/addemployee',function(){
//     return view('admin.addemployee');
// })->name('addemployee');

// Route::get('/employeelist',function (){
//     return view('admin.employeelist')->with('users',User::all());
// })->name('employeelist');
// Route::post('/addemployeelist',[EmployeeController::class,'create'])->name('addemployeelist');


// // Inventory Routes

// Route::get('/inventory',function(){

//     return view('admin.inventory')->with('inventories', Property::all());
// })->name('inventories');

// //Issuance

// Route::get('/issuance',function(){
//     return view('admin.issuance');
// })->name('issuance');

// // Register
// Route::get('/register',function(){
//     return view('admin.register');
// })->name('register');
// Route::post('/user',[UserController::class,'store']);
// //admin
// Route::get('/login',function(){
//     return view('admin.login');
// })->name('login'); -->

<!-- // Route::post('/login/process',[UserController::class, 'process']);


// Route::post('/logout',[UserController::class, 'logout']);

// //employee


// Route::get('/employee/login',function(){
//     return view('employee.login')->with('employees',User::all());
// });
// Route::post('employee/login/process',[EmployeeController::class,'process']);

// Route::get('/employee/dashboard',function(){
//     return view('employee.dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/employee/profile', function(){
//     return view('employee.profile')->with('user', auth()->user());
// });
// Route::get('/employee/property-transfer', function(){
//     return view('employee.transfer-property');
// });
// Route::get('/employee/property-return', function(){
//     return view('employee.return-property');
// });
// Route::get('/employee/change-password
// ', function(){
//     return view('employee.changepassword');
// });

// Route::post('updateemployee',
// [EmployeeController::class,'update']
// )->name('updateemployee');

// Route::get('employeeupdate/{id}',
// function($id){
//     return view('admin.employeeupdate')->with('employee',User::find($id));
// }
// )->name('employeeupdate');

// Route::get('/search',function(){
//     return view('admin.search')->with('inventories',Property::all());
// });
// Route::get('/search/property',[PropertyController::class, 'search']);

// Route::post('getproperties',function(Request $request){
//     $employee = User::find($request->id);
    
//     $properties = $employee->properties;
//     return json_encode($properties);
// })->name('getproperties'); -->

<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PropertyController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;
use App\Models\Property;
use App\Models\User;

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


// Route::get('/signin',function(){

//     return view('company.signin');
// });
// Route::get('/companyreg',function(){

//     return view('company.companyreg');
// });
// Route::post('/companyreg', [CompanyController::class, 'store']);
    

// Route::get('/home', function(){
//     return view('company.landingpage');
// });

// Change password Routes
Route::post('passwordchange',[UserController::class,'change'])->name('passwordchange');

Route::get('/employee/change-password/', function(){
    return view('employee.changepassword');
})->name('changepassword');

