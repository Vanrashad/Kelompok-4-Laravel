<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris - Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-4 md:p-8">

    <div class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-3 gap-4 auto-rows-[130px] md:auto-rows-[160px]">
        
        <div class="md:col-span-2 md:row-span-2 bg-gradient-to-br from-blue-600 to-indigo-800 rounded-3xl p-8 flex flex-col justify-between shadow-2xl border border-blue-500/30">
            <div>
                <span class="bg-white/20 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">SURVIVAL GUIDE</span>
                <h1 class="text-3xl md:text-5xl font-extrabold mt-6 tracking-tight leading-tight text-white">Satu Langkah Menuju Selamat di Tengah Hutan.</h1>
            </div>
            <p class="text-blue-100 text-sm md:text-base max-w-xl opacity-90">
                Akses panduan komprehensif penanganan medis darurat, identifikasi tanaman beracun, dan teknik membuat api tanpa korek. Karena di alam liar, pengetahuan adalah pelindung terbaik Anda.
            </p>
        </div>

        <div class="md:col-span-1 md:row-span-3 bg-slate-900 rounded-3xl p-6 md:p-8 flex flex-col justify-center shadow-xl border border-slate-800">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-white tracking-tight">Selamat Datang</h2>
                <p class="text-slate-400 text-sm mt-1">Silakan masuk ke akun Anda.</p>
            </div>

            @if(session('error'))
                <div class="bg-red-500/10 border border-red-500/20 text-red-400 text-xs rounded-xl p-3 mb-4 text-center">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="/login" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Alamat Email</label>
                    <input type="email" name="email" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all" placeholder="nama@email.com" value="{{ old('email') }}">
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Kata Sandi</label>
                        <a href="/forgot-password" class="text-xs text-blue-400 hover:underline hover:text-blue-300">Lupa?</a>
                    </div>
                    <input type="password" name="password" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all" placeholder="••••••••">
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-medium rounded-xl py-3 text-sm shadow-lg shadow-blue-600/20 transition-all pt-2">
                    Masuk Aplikasi
                </button>
            </form>

            <div class="mt-8 text-center border-t border-slate-800/60 pt-4">
                <p class="text-xs text-slate-400">Belum memiliki akun? <a href="/register" class="text-blue-400 font-semibold hover:underline">Daftar sekarang</a></p>
            </div>
        </div>

        <div class="bg-slate-900 rounded-3xl p-6 flex flex-col justify-center shadow-md border border-slate-800">
            <div class="flex items-center space-x-3">
                <div class="p-3 bg-emerald-500/10 text-emerald-400 rounded-2xl border border-emerald-500/20">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-white">Sesi Terproteksi</p>
                    <p class="text-xs text-slate-400 mt-0.5">Menggunakan enkripsi token CSRF bawaan.</p>
                </div>
            </div>
        </div>

        <div class="bg-slate-900 rounded-3xl p-6 flex flex-col justify-center shadow-md border border-slate-800">
            <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Arsitektur Backend</span>
            <p class="text-base font-bold text-white mt-1">Laravel Eloquent ORM</p>
            <span class="text-xs text-indigo-400 mt-1 flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-1.5"></span> Terhubung ke Database Aman
            </span>
        </div>

    </div>

</body>
</html>
