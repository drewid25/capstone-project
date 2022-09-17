<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
   public function create(Request $request){
    $property = new Property;
    $property->supplier_name = $request->supplier_name;
    $property->invoice_number = $request->invoice_number;
    $property->date_acquired = $request->date_acquired;
    $property->price = $request->price;
    $property->quantity = $request->quantity;
    $property->classification = $request->classification;
    $property->category = $request->category;
    $property->property_number= $request->property_number;
    $property->property_name = $request->property_name;
    $property->employee_id = $request->employee_id;
    $property->description = $request->description;
  
 
    $property->save();
    return redirect()->route('inventories')->with('success', 'New subject added.');
   }

   public function search(){
      $search_property = $_GET['query'];
      $property = Property::where('property_number', 'LIKE', '%' .$search_property. '%')->get();
      return view('admin.search',compact('property'));
   
   }



}
