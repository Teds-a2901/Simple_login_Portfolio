<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data = Student::where('f_name', 'like', '%ros%')->get();
        
       // return view('students.index', ['students'=>$data]);
    }

}
