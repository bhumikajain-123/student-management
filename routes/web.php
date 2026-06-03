<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('layout',function(){
    return view('layout');
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/create',[StudentController::class,'create']);

Route::post('/students/create',[StudentController::class,'store']);

Route::delete('/students/{id}/delete', [StudentController::class, 'destroy']);

// 
Route::get('/students/{id}',[StudentController::class,'show']);

// ------------------------------ edit ------------------------

Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
Route::put('/students/{id}', [StudentController::class, 'update']);







