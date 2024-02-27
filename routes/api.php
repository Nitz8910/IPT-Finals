<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::middleware('auth:sanctum')->group(function() {
    Route::get('/book',[BooksController::class,'index']);
    Route::get('/facility',[FacilityController::class,'index']);
    Route::get('/student',[StudentsController::class,'index']);
    
});
Route::post('/login',[AuthController::class,'login']);