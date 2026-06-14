<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 1. Menampilkan Tampilan Login
    public function loginForm() {
        return view('login');
    }

    // 2. Menampilkan Tampilan Register
    public function registerForm() {
        return view('register');
    }

    // 3. Proses Registrasi Akun Baru
    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return redirect('/login');
    }

    // 4. Proses Masuk Sistem (Login)
    public function login(Request $request){
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->with('error','Login gagal');
    }

    // 5. Proses Keluar Sistem (Logout)
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}