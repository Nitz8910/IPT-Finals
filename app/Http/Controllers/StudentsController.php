<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Database\Factories\StudentFactory;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        $students = Students::all();
        return response()->json($students);
           }
}
