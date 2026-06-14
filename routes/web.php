<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


Route::get('/login', [AuthController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm'])->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/forgot-password', function () { 
    return view('auth.forgot-password'); 
})->name('password.request')->middleware('guest');


Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){ return view('dashboard'); });
    Route::resource('products', ProductController::class);
});
