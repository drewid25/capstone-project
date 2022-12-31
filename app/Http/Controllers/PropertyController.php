<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Property;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PropertyController extends Controller
{

   public function propertyupdate($id)
   {
      $property = Property::find($id);
      $companies = Company::all();
      $users = User::all();

      return view('admin.property.update', compact('property', 'companies', 'users'));
   }
   public function inventory()
   {
      $inventories = Property::latest()->paginate(20);
      $companies = Company::all();
      return view('admin.property.inventory', compact('inventories', 'companies'));
   }
   public function show()
   {
      $inventories = Property::latest()->paginate(20);
      $companies = Company::all();
      return view('admin.dashboard', compact('inventories', 'companies'));
   }
   public function addproperty()
   {
      $users = User::all();
      $companies = Company::all();
      return view('admin.property.add', compact('users', 'companies'));
   }
   public function create(Request $request)
   {


      $property = new Property;
      $property->supplier_name = $request->supplier_name;
      $property->invoice_number = $request->invoice_number;
      $property->date_acquired = $request->date_acquired;
      $property->price = $request->price;
      $property->quantity = $request->quantity;
      $property->classification = $request->classification;
      $property->category = $request->category;
      $property->property_number = $request->property_number;
      $property->user_id = $request->user_id;
      $property->property_name = $request->property_name;

      $property->description = $request->description;


      $property->save();
      return redirect()->route('inventories')->with('success', 'New property added.');
   }

   public function search()
   {
      $search_property = $_GET['query'];
      $property = Property::where('property_number', 'LIKE', '%' . $search_property . '%')->get();
      return view('admin.search', compact('property'));
   }
   public function update(Request $request, $id)
   {

      $property = Property::find($id)->update([
         'supplier_name' => $request->supplier_name,
         'invoice_number' => $request->invoice_number,
         'date_acquired' => $request->date_acquired,
         'price' => $request->price,
         'quantity' => $request->quantity,
         'classification' => $request->classification,
         'category' => $request->category,
         'property_number' => $request->property_number,
         'property_name' => $request->property_name,
         'description' => $request->description,
      ]);






      return redirect('/inventory')->with('success', 'Property updated.');
   }
}
