<?php

namespace App\Http\Controllers;
use App\Models\Facility;
use Database\Factories\FacilityFactory;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(){
        $facility = Facility::all();
        return response()->json($facility);
           } 
}
