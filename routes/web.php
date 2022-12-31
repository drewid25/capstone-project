<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PropertyController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use Illuminate\Support\Facades\Route;
use App\Models\Property;
use App\Models\User;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Office;
use Illuminate\Http\Request;



// Dashboard Route

// Property Routes
Route::controller(PropertyController::class)->group(function () {
    Route::get('/dashboard',  'show')->middleware(['auth'])->name('dashboard');
    Route::post('/createproperty',  'create')->name('createproperty');
    Route::get('/addproperty',  'addproperty')->name('addproperty');
    Route::post('getproperties', function (Request $request) {
        $user = User::find($request->id);
        $properties = $user->properties;
        return json_encode($properties);
    })->name('getproperties');
    Route::get('propertyupdate/{id}', 'propertyupdate')->name('propertyupdate');
    Route::post('/updateproperty/{id}', 'update')->name('updateproperty');
    // Inventory Routes
    Route::get('/inventory',  'inventory')->name('inventories');
});
// Employee Routes
Route::controller(EmployeeController::class)->group(
    function () {
        // admin dashboard
        Route::get('/addemployee', 'addemployee')->name('addemployee');
        Route::get('/employeelist', 'employeeList')->name('employeelist');
        Route::get('employeeupdate/{id}', 'employeeUpdate')->name('employeeupdate');
        // employee dashboard
        Route::get('/employee/dashboard/', 'employeeDashboard')->middleware(['auth'])->name('dashboard');
        Route::get('/employee/profile/{id}', 'employeeProfile');
        Route::post('updateemployee',  'update')->name('updateemployee');
    }
);
Route::controller(UserController::class)->group(function () {

    Route::post('/user',  'store');
    Route::get('/register', 'register')->name('register');

    //  Login/logout  Route
    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');
    Route::post('/login/process', 'process');
    Route::post('/logout',  'logout');
    // Change Password Route
    Route::post('passwordchange',  'change')->name('passwordchange');
    Route::get('/employee/change-password/', 'changePassword')->name('changepassword');
});

Route::controller(CompanyController::class)->group(function () {
    // Home Route
    Route::get('/companylanding',  'show')->name('dashboard');
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

// Add office 
Route::controller(OfficeController::class)->group(function () {
    Route::post('/office',  'store')->name('office');
    Route::get('/addoffice', 'addOffice');
    Route::get('/officelist', 'show')->name('officelist');
    Route::get('/updateoffice/{id}', function () {
        return view('admin.office.update')->with('office', Office::all())->with('companies', Company::all());
    });
    Route::post('/officeupdate', 'update')->name('updateoffice');
});
