<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Bento Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center p-4 md:p-8">

    <div class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-3 gap-4 auto-rows-[120px] md:auto-rows-[150px]">
        
        <div class="md:col-span-1 md:row-span-3 bg-slate-800 rounded-3xl p-6 md:p-8 flex flex-col justify-center shadow-lg border border-slate-700/50 order-last md:order-first">
            <div class="mb-4">
                <h2 class="text-2xl font-bold text-white">Buat Akun</h2>
                <p class="text-slate-400 text-sm">Daftarkan email Anda untuk mulai mengelola sistem[cite: 71].</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-500/10 border border-red-500/20 text-red-400 text-xs rounded-xl p-3 mb-3">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/register" class="space-y-3"> [cite: 101]
                @csrf [cite: 102]
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Nama Lengkap</label>
                    <input type="text" name="name" required value="{{ old('name') }}" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-2 text-sm text-white focus:outline-none focus:border-indigo-500 transition-colors" placeholder="John Doe"> [cite: 103]
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Email</label>
                    <input type="email" name="email" required value="{{ old('email') }}" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-2 text-sm text-white focus:outline-none focus:border-indigo-500 transition-colors" placeholder="john@example.com"> [cite: 104]
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Password</label>
                    <input type="password" name="password" required class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-2 text-sm text-white focus:outline-none focus:border-indigo-500 transition-colors" placeholder="Min. 6 Karakter"> [cite: 105]
                </div>
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-medium rounded-xl py-3 text-sm shadow-lg shadow-indigo-600/20 transition-all mt-3"> [cite: 106]
                    Daftar Akun
                </button> [cite: 106]
            </form> [cite: 107]

            <div class="mt-4 text-center">
                <p class="text-xs text-slate-400">Sudah punya akun? <a href="/login" class="text-indigo-400 font-medium hover:underline">Login disini</a></p>
            </div>
        </div>

        <div class="md:col-span-2 md:row-span-2 bg-gradient-to-br from-slate-800 to-slate-850 rounded-3xl p-8 flex flex-col justify-between shadow-lg border border-slate-700/50">
            <div>
                <span class="bg-indigo-500/10 text-indigo-400 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider border border-indigo-500/20">Secure Hashing</span>
                <h1 class="text-3xl font-bold mt-4 tracking-tight text-white">Keamanan Kredensial Terjamin.</h1>
            </div>
            <p class="text-slate-400 text-sm md:text-base max-w-md">
                Setiap password yang Anda daftarkan otomatis dienkripsi menggunakan metode <code class="text-indigo-400 bg-slate-900/50 px-1.5 py-0.5 rounded font-mono text-xs">Hash::make</code> sebelum disimpan ke dalam database[cite: 77].
            </p>
        </div>

        <div class="bg-slate-800 rounded-3xl p-6 flex flex-col justify-center shadow-lg border border-slate-700/50">
            <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Database Schema</span>
            <p class="text-base font-bold text-white mt-1">Users Table Migration</p> [cite: 45]
            <span class="text-xs text-emerald-400 mt-1">Ready with standard Laravel fields[cite: 15, 62].</span>
        </div>

        <div class="bg-slate-800 rounded-3xl p-6 flex flex-col justify-center shadow-lg border border-slate-700/50">
            <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Validasi Input</span>
            <p class="text-base font-bold text-white mt-1">Proteksi Ganda</p>
            <span class="text-xs text-indigo-400 mt-1">Pencegahan email duplikat secara real-time[cite: 71].</span>
        </div>

    </div>

</body>
</html>
