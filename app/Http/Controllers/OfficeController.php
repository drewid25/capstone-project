<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function addOffice()
    {
        $companies = Company::all();
        return view('admin.office.add', compact('companies'));
    }
    public function store(Request $request)
    {
        $office = new Office();
        $office->office_name = $request->office_name;
        $office->office_email = $request->office_email;

        $office->contact_number = $request->contact_number;

        $office->save();
        return redirect()->route('officelist')->with('message', "New Office Added");
    }
    public function show()
    {
        $offices = Office::latest()->paginate(20);
        $companies = Company::all();
        return view('admin.office.list', compact('offices', 'companies'));
    }
    public function edit($id)
    {
        $office = Office::find($id);
        $companies = Company::all();
        return view('admin.office.update', compact('companies', 'office'));
    }
    public function update(Request $request)
    {
        $office = Office::find($request->id);
        $office->office_name = $request->office_name;
        $office->office_email = $request->office_email;
        $office->contact_number = $request->contact_number;
        $office->save();
        return redirect('/officelist')->with('success', 'Office Updated');
    }
}
