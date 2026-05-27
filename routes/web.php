<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\register;
Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[AuthController::class,'showlogin']);

// -------------------register-------------------


Route::get('register',[AuthController::class,'showRegister']);
Route::post('register',[AuthController::class,'register']);

