<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = "company";

    protected $fillable = [
        'company_name',
        'company_add',
        'email',
        'company_logo',
        'password',
        'password_confirmation'
        // 'invoice_number',
        // 'date-aqcquired',
        // 'price',
        // 'quantity',
        // 'classification',
        // 'property_number',
        // 'category',
        // 'property_name',
        // 'description',
        // 'user_id'
       
    ];
  

}