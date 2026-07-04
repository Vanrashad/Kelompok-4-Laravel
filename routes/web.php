<?php

use App\Models\Guide;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use App\Http\Controllers\GuideController;
use App\Http\Controllers\AuthController; // Tambahkan baris ini

// Route untuk halaman awal (langsung ke form login)
Route::get('/', [AuthController::class, 'loginForm'])->name('login');

// Route Auth (Login, Register, Logout) diarahkan ke AuthController
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);


// Route Dashboard (Hanya bisa diakses jika sudah login)
Route::get('/dashboard', function () {
    // Karena AuthController menggunakan fitur Auth::attempt bawaan Laravel,
    // kita ubah pengecekan sessionnya menggunakan Auth::check()
    if(!auth()->check()) { 
        return redirect('/');
    }
    
    // Kirim data guides ke view
    $guides = Guide::latest()->get();
    return view('dashboard', compact('guides'));
})->name('dashboard');


// Route Halaman Statis Lainnya
Route::get('/materi', function () { return view('materi'); });
Route::get('/profil', function () { return view('profil'); });
Route::get('/api', function () { return view('api'); });
Route::get('/shelter', function () { return view('shelter'); });
Route::get('/peralatan', function () { return view('peralatan'); });
Route::get('/air', function () { return view('air'); });
Route::get('/contact', function () { return view('contact'); });

// Route Resource Guides
Route::resource('guides', GuideController::class);
Route::get('/guides/{guide}/edit', [GuideController::class, 'edit'])->name('guides.edit');
Route::put('/guides/{guide}', [GuideController::class, 'update'])->name('guides.update');
Route::delete('/guides/{guide}', [GuideController::class, 'destroy'])->name('guides.destroy');