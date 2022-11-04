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
Route::get('/companylanding',[CompanyController::class, 'show'])->name('dashboard');
// Dashboard Route
Route::get('/dashboard', [PropertyController::class, 'show'])->middleware(['auth'])->name('dashboard') ;
// Property Controller
Route::controller(PropertyController::class)->group(function () {
    Route::post('/createproperty', [PropertyController::class, 'create'])->name('createproperty');
    Route::get('/addproperty', [PropertyController::class, 'addproperty'])->name('addproperty');
    Route::post('getproperties', function (Request $request) {
        $user = User::find($request->id);

        $properties = $user->properties;

        return json_encode($properties);
    })->name('getproperties');
    Route::get('propertyupdate/{id}', function ($id) {
        return view('admin.propertyupdate')->with('property', Property::find($id))->with('companies', Company::all())->with('users', User::all());
    })->name('propertyupdate');
    Route::post(
        '/updateproperty/{id}',
        [PropertyController::class, 'update']
    )->name('updateproperty');
    // Inventory Routes
    Route::get('/inventory', [PropertyController::class,'inventory'])->name('inventories');

        // return view('admin.inventory')->with('inventories', Property::all());
   
});

Route::controller(UserController::class)->group(function () {
    Route::get('/addemployee', function () {
        return view('admin.addemployee')->with('companies', Company::all());
    })->name('addemployee');
    Route::get('/employeelist', function () {
        return view('admin.employeelist')->with('users', User::all())->with('companies', Company::all());
    })->name('employeelist');
    Route::get('/employee/dashboard/', function () {
        return view('employee.dashboard')->with('inventories', Property::all())->with('companies', Company::all());
    })->middleware(['auth'])->name('dashboard');
    Route::get('/employee/profile/{id}', function ($id) {
        return view('employee.profile')->with('users', User::find($id));
    });
    Route::get(
        'employeeupdate/{id}',
        function ($id) {
            return view('admin.employeeupdate')->with('users', User::find($id))->with('companies', Company::all());
        }
    )->name('employeeupdate');
    Route::post('updateemployee', [UserController::class, 'update'])->name('updateemployee');
    Route::post('/user', [UserController::class, 'store']);
    Route::get('/register', function () {
        return view('admin.register');
    })->name('register');

    //  Login/logout  Route
    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');
    Route::post('/login/process', [UserController::class, 'process']);
    Route::post('/logout', [UserController::class, 'logout']);
    // Change Password Route
    Route::post('passwordchange', [UserController::class, 'change'])->name('passwordchange');
    Route::get('/employee/change-password/', function () {
        return view('employee.changepassword')->with('companies', Company::all());
    })->name('changepassword');
});

Route::controller(CompanyController::class)->group(function () {
    Route::get('/signin', function () {

        return view('company.signin');
    });
    Route::get('/', function () {

        return view('company.landingpage');
    });
    Route::get('/companyreg', function () {

        return view('company.companyreg');
    });
    Route::post('companyreg', [CompanyController::class, 'store']);


    Route::get('/home', function () {
        return view('company.landingpage');
    });
});















