<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/materi', function () {
    return view('materi');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/api', function () {
    return view('api');
});

Route::get('/shelter', function () {
    return view('shelter');
});

Route::get('/peralatan', function () {
    return view('peralatan');
});

Route::get('air', function () {
    return view('air');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('contact');
});