<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris - Daftar Akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-4 md:p-8">

    <div class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-3 gap-4 auto-rows-[130px] md:auto-rows-[160px]">
        
        <div class="md:col-span-1 md:row-span-3 bg-slate-900 rounded-3xl p-6 md:p-8 flex flex-col justify-center shadow-xl border border-slate-800 order-last md:order-first">
            <div class="mb-4">
                <h2 class="text-2xl font-bold text-white tracking-tight">Buat Akun Baru</h2>
                <p class="text-slate-400 text-sm mt-1">Isi formulir untuk mendaftar sistem.</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-500/10 border border-red-500/20 text-red-400 text-xs rounded-xl p-3 mb-3">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/register" class="space-y-3">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Nama Lengkap</label>
                    <input type="text" name="name" required value="{{ old('name') }}" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-blue-500 transition-all" placeholder="Nama Anda">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Alamat Email</label>
                    <input type="email" name="email" required value="{{ old('email') }}" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-blue-500 transition-all" placeholder="email@contoh.com">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Kata Sandi</label>
                    <input type="password" name="password" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-blue-500 transition-all" placeholder="Minimal 6 karakter">
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-medium rounded-xl py-3 text-sm shadow-lg shadow-blue-600/20 transition-all mt-4">
                    Registrasi Akun
                </button>
            </form>

            <div class="mt-6 text-center border-t border-slate-800/60 pt-3">
                <p class="text-xs text-slate-400">Sudah memiliki akun? <a href="/login" class="text-blue-400 font-semibold hover:underline">Masuk disini</a></p>
            </div>
        </div>

        <div class="md:col-span-2 md:row-span-2 bg-gradient-to-br from-slate-900 to-slate-850 rounded-3xl p-8 flex flex-col justify-between shadow-xl border border-slate-800">
            <div>
                <span class="bg-blue-500/10 text-blue-400 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider border border-blue-500/20">Secure Data Hashing</span>
                <h1 class="text-3xl font-bold mt-5 tracking-tight text-white text-transparent bg-clip-text bg-gradient-to-r from-white to-slate-300">Enkripsi Kredensial Otomatis.</h1>
            </div>
            <p class="text-slate-400 text-sm md:text-base max-w-lg leading-relaxed">
                Setiap akun dilindungi menggunakan metode hashing satu arah <code class="text-blue-400 bg-slate-950 px-1.5 py-0.5 rounded font-mono text-xs">Hash::make()</code>, memastikan keamanan data pribadi Anda dari akses yang tidak sah.
            </p>
        </div>

        <div class="bg-slate-900 rounded-3xl p-6 flex flex-col justify-center shadow-md border border-slate-800">
            <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Skema Tabel</span>
            <p class="text-base font-bold text-white mt-1">Users Migration Ready</p>
            <span class="text-xs text-emerald-400 mt-1 flex items-center">
                <span class="w-2 h-2 bg-emerald-500 rounded-full mr-1.5"></span> Bersih & Terstruktur
            </span>
        </div>

        <div class="bg-slate-900 rounded-3xl p-6 flex flex-col justify-center shadow-md border border-slate-800">
            <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Validasi Form</span>
            <p class="text-base font-bold text-white mt-1">Anti Email Duplikat</p>
            <span class="text-xs text-blue-400 mt-1">Proteksi ganda form isian pengguna.</span>
        </div>

    </div>

</body>
</html>