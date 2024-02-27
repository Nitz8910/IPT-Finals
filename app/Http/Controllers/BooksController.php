<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Database\Factories\BooksFactory;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Books::all();
        return response()->json($books);
           } 
}
