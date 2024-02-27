<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        If (Auth::attempt([
            "email" =>$request->email,
            "password"=>$request->password
        ])){
            $user = Auth::user();
            $token = $user->createtoken($user->email)->plaintexttoken;
            return response([
             "message"=>"Authentication Successful",
             "token"=>$token   
            ]);
        }else{
            return response([
                "message"=>"Authentication Failed"
            ],401);
     }

    }
}