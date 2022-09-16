<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Employee extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'employees';

    protected $fillable = [
        'id',
        'ID_number',
        'employee_name',
        'email_address',
        'login_password',
        'employee_image',
        'department',
        
    ];

    public function property(){
        return $this->hasMany(Property::class);
    }
   

}