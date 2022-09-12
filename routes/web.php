<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Property;
use App\Models\Employee;
use App\Models\User;

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


Route::get('/register',[UserController::class,'register']);
Route::get('/', function (){
    return view('landingpage');
})->name('dashboard');
Route::get('/dashboard', function (){
    return view('admin.dashboard')->with('user',User::all())->with('inventories',Property::all());
})->middleware(['auth'])->name('dashboard');;



// Property Routes
Route::post('/createproperty',[PropertyController::class,'create'])->name('createproperty');
Route::get('/addproperty',function(){
    return view('admin.addproperty');
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
Route::post('/store',[UserController::class,'store']);
//login
Route::get('/login',function(){
    return view('admin.login');
})->name('login');
Route::post('/login/process',[UserController::class, 'process']);


Route::post('/logout',[UserController::class, 'logout']);