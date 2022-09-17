<?php

use App\Http\Controllers\PropertyController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;
use App\Models\Property;
use App\Models\Employee;
use App\Models\Admin;

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


// Route::get('/register',[UserController::class,'register']);
Route::get('/', function (){
    return view('landingpage');
})->name('dashboard');
Route::get('/dashboard', function (){
    return view('admin.dashboard')->with('inventories',Property::all());
})->middleware(['auth'])->name('dashboard');;



// Property Routes
Route::post('/createproperty',[PropertyController::class,'create'])->name('createproperty');
Route::get('/addproperty',function(){
    return view('admin.addproperty')->with('employees',Employee::all());
});




// Employee Routes

Route::get('/addemployee',function(){
    return view('admin.addemployee');
})->name('addemployee');

Route::get('/employeelist',function (){
    return view('admin.employeelist')->with('employees', Employee::all());
})->name('employeelist');
Route::post('/addemployeelist',[EmployeeController::class,'create'])->name('addemployeelist');


// Inventory Routes

Route::get('/inventory',function(){

    return view('admin.inventory')->with('inventories', Property::all());
})->name('inventories');

//Issuance

Route::get('/issuance',function(){
    return view('admin.issuance');
})->name('issuance');

// Register
Route::get('/register',function(){
    return view('admin.register');
})->name('register');
Route::post('/user',[UserController::class,'store']);
//admin
Route::get('/login',function(){
    return view('admin.login');
})->name('login');
Route::post('/login/process',[UserController::class, 'process']);


Route::post('/logout',[UserController::class, 'logout']);

//employee


Route::get('/employee/login',function(){
    return view('employee.login')->with('employees',Employee::all());
});
Route::post('employee/login/process',[EmployeeController::class,'process']);

Route::get('/employee/dashboard',function(){
    return view('employee.dashboard')->with('user', auth()->user());
});

Route::get('/employee/profile', function(){
    return view('employee.profile')->with('user', auth()->user());
});
Route::get('/employee/property-transfer', function(){
    return view('employee.transfer-property');
});
Route::get('/employee/property-return', function(){
    return view('employee.return-property');
});
Route::get('/employee/change-password
', function(){
    return view('employee.changepassword');
});

Route::post('updateemployee',
[EmployeeController::class,'update']
)->name('updateemployee');

Route::get('employeeupdate/{id}',
function($id){
    return view('admin.employeeupdate')->with('employee',Employee::find($id));
}
)->name('employeeupdate');

Route::get('/search',function(){
    return view('admin.search')->with('inventories',Property::all());
});
Route::get('/search/property',[PropertyController::class, 'search']);


