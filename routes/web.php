<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('website_section.home');
});

Route::get('/cart',function(){
    return view('website_section.cart');
});
/*
    Маршруты авторизации
*/
Route:: view('/auth', 'website_section.auth');

Route::post('/auth/auth_users',
    [AuthController::class,'login'])->name('login');

Route::post('/auth/register_users',
    [UserController::class, 'register'])->name('register');

Route::post('/auth/password_email',
    [AuthController::class,'password_email'])->name('password.email');

//Route:: view('/cart', 'cart');

