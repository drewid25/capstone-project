<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = "property";

    protected $fillable = [
        'supplier_name',
        'invoice_number',
        'date-aqcquired',
        'price',
        'quantity',
        'classification',
        'property_number',
        'category',
        'property_name',
        'description',
        'user_id'
       
    ];
   public function user(){
    return $this->belongsTo(User::class);
   }

}