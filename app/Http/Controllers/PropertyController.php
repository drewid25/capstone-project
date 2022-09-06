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
    $property->property_number= $request->property_number;
    $property->property_name = $request->property_name;
   
    $property->description = $request->description;
  
 
    $property->save();
    return redirect()->route('inventories')->with('success', 'New subject added.');
   }
}
