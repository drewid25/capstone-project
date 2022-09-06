<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Property;
use App\Models\Employee;

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

// Route::get('/users',function(Request $request){
//     dd($request);
//     return null;
// });

// Route::get('/get-text',function(){
//     return response("Hello PinoyFreeCoder", 200)
//                 ->header('Content-Type', 'text/plain');
// });

// Route::get('/user/{id}',function($id){
//     return response($id,200);
// });

// Route::get('/user/{id}/{group}',function($id,$group){
//     return response($id.'-'.$group,200);
// });

// Route::get('/request-json',function(){
//     return response()->json(['name'=>'PinoyfreeCoder','age'=>22,]);
// });

//  Route::get('/request-download',function(){
//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $headers = array(
//         'Content-type: application/text-plain'
//     );
//     return response()->download($path, $name, $headers);
// });


// // Route::get('/users',[UserController::class, 'index']);
Route::get('/register',[UserController::class,'register']);
Route::get('/', function (){
    return view('user.dashboard');
})->name('dashboard');
Route::get('/dashboard', function (){
    return view('user.dashboard');
})->name('dashboard');



// Property Routes
Route::post('/createproperty',[PropertyController::class,'create'])->name('createproperty');
Route::get('/addproperty',function(){
    return view('user.addproperty');
});




// Employee Routes

Route::get('/addemployee',function(){
    return view('user.addemployee');
})->name('addemployee');


// Inventory Routes

Route::get('/inventory',function(){

    return view('user.inventory')->with('inventories', Property::all());
})->name('inventories');