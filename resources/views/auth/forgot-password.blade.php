<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris - Pemulihan Sandi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-4 md:p-8">

    <div class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-3 gap-4 auto-rows-[130px] md:auto-rows-[160px]">
        
        <div class="md:col-span-2 md:row-span-2 bg-gradient-to-br from-purple-900 via-indigo-950 to-slate-900 rounded-3xl p-8 flex flex-col justify-between shadow-xl border border-purple-900/40">
            <div>
                <span class="bg-purple-500/20 text-purple-300 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Account Recovery</span>
                <h1 class="text-3xl md:text-4xl font-bold mt-5 tracking-tight text-white">Kehilangan Akses Akun?</h1>
            </div>
            <p class="text-slate-300 text-sm md:text-base max-w-xl opacity-90 leading-relaxed">
                Jangan khawatir. Masukkan alamat email terdaftar Anda di kolom samping. Kami akan memverifikasi data dan memandu Anda untuk menyetel ulang kata sandi yang baru.
            </p>
        </div>

        <div class="md:col-span-1 md:row-span-3 bg-slate-900 rounded-3xl p-6 md:p-8 flex flex-col justify-center shadow-xl border border-slate-800">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-white tracking-tight">Lupa Kata Sandi</h2>
                <p class="text-slate-400 text-sm mt-1">Kirim tautan pemulihan ke email Anda.</p>
            </div>

            @if(session('status'))
                <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs rounded-xl p-3 mb-4 text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="#" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Email Terdaftar</label>
                    <input type="email" name="email" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-purple-500 transition-all" placeholder="nama@email.com">
                </div>
                
                <button type="submit" class="w-full bg-purple-700 hover:bg-purple-600 text-white font-medium rounded-xl py-3 text-sm shadow-lg shadow-purple-700/20 transition-all mt-2">
                    Kirim Link Reset
                </button>
            </form>

            <div class="mt-8 text-center border-t border-slate-800/60 pt-4">
                <p class="text-xs text-slate-400">Ingat kata sandi Anda? <a href="/login" class="text-purple-400 font-semibold hover:underline">Kembali Login</a></p>
            </div>
        </div>

        <div class="bg-slate-900 rounded-3xl p-6 flex flex-col justify-center shadow-md border border-slate-800">
            <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Penting</span>
            <p class="text-sm font-semibold text-white mt-1">Periksa Folder Spam</p>
            <span class="text-xs text-slate-400 mt-0.5">Jika email verifikasi tidak kunjung masuk ke kotak utama Anda.</span>
        </div>

        <div class="bg-slate-900 rounded-3xl p-6 flex flex-col justify-center shadow-md border border-slate-800">
            <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Butuh Bantuan?</span>
            <p class="text-sm font-semibold text-white mt-1">Hubungi Administrator</p>
            <span class="text-xs text-purple-400 mt-0.5">Untuk pemulihan manual sistem internal.</span>
        </div>

    </div>

</body>
</html>
