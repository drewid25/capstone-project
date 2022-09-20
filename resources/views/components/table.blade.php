






// Employee Routes




Route::post('/addemployeelist',[EmployeeController::class,'create'])->name('addemployeelist');






//Issuance

Route::get('/issuance',function(){
    return view('admin.issuance');
})->name('issuance');

// Register


//admin







//employee


Route::get('/employee/login',function(){
    return view('employee.login')->with('employees',User::all());
});












Route::get('/search',function(){
    return view('admin.search')->with('inventories',Property::all());
});
Route::get('/search/property',[PropertyController::class, 'search']);




