<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bento Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center p-4 md:p-8">

    <div class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-3 gap-4 auto-rows-[120px] md:auto-rows-[150px]">
        
        <div class="md:col-span-2 md:row-span-2 bg-gradient-to-br from-indigo-600 to-purple-700 rounded-3xl p-8 flex flex-col justify-between shadow-lg border border-indigo-500/30">
            <div>
                <span class="bg-white/20 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Platform v1.0</span>
                <h1 class="text-3xl md:text-5xl font-bold mt-4 tracking-tight leading-none text-white">Kelola Produk & Inventaris Lebih Mudah.</h1>
            </div>
            <p class="text-indigo-100 text-sm md:text-base max-w-md">
                Sistem manajemen inventaris berbasis Laravel dengan kendali penuh atas produk, stok, dan analisis penjualan dalam satu dasbor terintegrasi[cite: 1, 14, 56].
            </p>
        </div>

        <div class="md:col-span-1 md:row-span-3 bg-slate-800 rounded-3xl p-6 md:p-8 flex flex-col justify-center shadow-lg border border-slate-700/50">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-white">Selamat Datang</h2>
                <p class="text-slate-400 text-sm">Masuk untuk melanjutkan ke dashboard[cite: 86].</p>
            </div>

            @if(session('error'))
                <div class="bg-red-500/10 border border-red-500/20 text-red-400 text-xs rounded-xl p-3 mb-4 text-center">
                    {{ session('error') }} [cite: 88]
                </div>
            @endif

            <form method="POST" action="/login" class="space-y-4"> [cite: 95]
                @csrf [cite: 95]
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Email Address</label>
                    <input type="email" name="email" required class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 transition-colors" placeholder="nama@email.com"> [cite: 96]
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Password</label>
                        <a href="/forgot-password" class="text-xs text-indigo-400 hover:underline">Lupa Password?</a>
                    </div>
                    <input type="password" name="password" required class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 transition-colors" placeholder="••••••••"> [cite: 97]
                </div>
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-medium rounded-xl py-3 text-sm shadow-lg shadow-indigo-600/20 transition-all mt-2"> [cite: 98]
                    Masuk Sekarang
                </button> [cite: 98]
            </form> [cite: 99]

            <div class="mt-6 text-center">
                <p class="text-xs text-slate-400">Belum punya akun? <a href="/register" class="text-indigo-400 font-medium hover:underline">Daftar disini</a></p>
            </div>
        </div>

        <div class="bg-slate-800 rounded-3xl p-6 flex flex-col justify-center shadow-lg border border-slate-700/50">
            <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Fitur Utama</span>
            <p class="text-lg font-bold text-white mt-1">Laravel CRUD Resource</p> [cite: 1]
            <span class="text-xs text-indigo-400 mt-1">Menggunakan standard ProductController[cite: 21, 22].</span>
        </div>

        <div class="bg-slate-800 rounded-3xl p-6 flex flex-col justify-center shadow-lg border border-slate-700/50">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-emerald-500/10 text-emerald-400 rounded-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-white">Sesi Aman</p>
                    <p class="text-xs text-slate-400">Regenerasi token otomatis saat login[cite: 86].</p>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
