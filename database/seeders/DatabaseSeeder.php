<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use APP\Models\Property;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Employee::create([
        "ID_number"=> 'B13-001',
        "employee_name"=> 'Andrew R. Idanol',
        "email_address"=> "andrewidanol@gmail.com",
        "department"=> "IT Department"
       ]);
       Employee::create([
        "ID_number"=> 'B13-002',
        "employee_name"=> 'Bob Kyle Garcia',
        "email_address"=> "andrewidanol@gmail.com",
        "department"=> "IT Department"
       ]);
       
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
