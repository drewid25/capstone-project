<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'ID_number',
        'employee_name',
        'email_address',
        'department',
        
    ];

    public function property(){
        return $this->hasMany(Property::class);
    }
   

}