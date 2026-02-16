<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
       $validatedData = $request->validate([
           'email' => 'required|email',
           'password' => 'required',
       ]);



    }
    public function logout(Request $request){}

    public function register(Request $request){

    }
    public function resetPassword(Request $request){}
    public function changePassword(Request $request){}


}


