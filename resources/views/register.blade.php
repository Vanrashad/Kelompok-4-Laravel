@extends('app')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4 bg-gradient-to-br from-gray-900 via-gray-800 to-green-950">
    <div class="bg-gray-800/80 p-8 rounded-3xl border border-gray-700 max-w-md w-full backdrop-blur-md shadow-2xl">
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-green-500/20 text-green-400 rounded-2xl flex items-center justify-center mx-auto mb-3">
                <i class="fa-solid fa-user-plus text-2xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-white">Buat Akun Survivor</h2>
            <p class="text-sm text-gray-400 mt-1">Daftarkan dirimu untuk mulai belajar navigasi.</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500 text-red-400 p-3 rounded-xl text-sm mb-4">
                <ul class="list-disc pl-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/register" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-semibold uppercase text-gray-400 mb-1">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="w-full bg-gray-900 border border-gray-700 rounded-xl p-3 text-white focus:outline-none focus:border-green-500 transition">
            </div>
            <div>
                <label class="block text-xs font-semibold uppercase text-gray-400 mb-1">Alamat Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full bg-gray-900 border border-gray-700 rounded-xl p-3 text-white focus:outline-none focus:border-green-500 transition">
            </div>
            <div>
                <label class="block text-xs font-semibold uppercase text-gray-400 mb-1">Kata Sandi (Min 6 Karakter)</label>
                <input type="password" name="password" required class="w-full bg-gray-900 border border-gray-700 rounded-xl p-3 text-white focus:outline-none focus:border-green-500 transition">
            </div>
            <button type="submit" class="w-full bg-green-600 hover:bg-green-500 text-white font-bold p-3 rounded-xl transition shadow-lg shadow-green-600/20 mt-2">
                Daftar Akun
            </button>
        </form>

        <p class="text-sm text-gray-400 text-center mt-6">
            Sudah ada akun? <a href="/login" class="text-green-400 hover:underline">Masuk di sini</a>
        </p>
    </div>
</div>
@endsection