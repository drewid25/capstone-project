<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
public function index(){

 $data = DB::table('students')
        ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();

 return view('students.index',['students' => $data]);
}
}
