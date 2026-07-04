<!DOCTYPE html>
<html lang="id">
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
=======
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Survival Guide</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#081b4b,#0f2c7a,#081b4b);
    color:white;
}

.container{
    width:1100px;
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:25px;
}

.left{
    display:grid;
    grid-template-rows:2fr 1fr;
    gap:20px;
}

.hero{
    background:linear-gradient(135deg,#47d7ff,#8ef6ff);
    color:white;
    padding:40px;
    border-radius:25px;
}

.badge{
    background:rgba(255,255,255,.3);
    display:inline-block;
    padding:8px 16px;
    border-radius:20px;
    margin-bottom:20px;
    font-size:13px;
}

.hero h1{
    font-size:50px;
    line-height:1.1;
    margin-bottom:20px;
}

.hero p{
    font-size:16px;
    line-height:1.7;
}

.bottom{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

.card{
    background:#132a78;
    padding:25px;
    border-radius:20px;
}

.card h3{
    margin-bottom:10px;
}

.login-box{
    background:#132a78;
    padding:40px;
    border-radius:25px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.login-box h2{
    font-size:35px;
    margin-bottom:10px;
}

.login-box p{
    color:#d1d5db;
    margin-bottom:25px;
}

label{
    font-size:13px;
    margin-bottom:8px;
    display:block;
}

input{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    margin-bottom:18px;
    background:#0d1f5c;
    color:white;
}

button{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:#47d7ff;
    color:#081b4b;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
}

button:hover{
    opacity:0.9;
}

.register{
    text-align:center;
    margin-top:20px;
    color:#d1d5db;
}

.register a{
    color:#47d7ff;
    text-decoration:none;
}

@media(max-width:900px){
    .container{
        width:95%;
        grid-template-columns:1fr;
    }
}
</style>
>>>>>>> 62da72ee0c6a29ac7cc74e6015e6ee8b065bcbdd
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<<<<<<< HEAD
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Selamat Datang</h2>
        
        <form action="#" method="POST">
            @csrf 
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Alamat Email
                </label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" id="email" name="email" placeholder="email@contoh.com" required>
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" id="password" name="password" placeholder="********" required>
            </div>
            
            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-500 rounded">
                    <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:text-blue-700 hover:underline">Lupa Password?</a>
            </div>
            
            <button class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300" type="submit">
                Masuk
            </button>
        </form>
    </div>
=======
<div class="container">

    <div class="left">

        <div class="hero">
            <span class="badge">SURVIVAL GUIDE</span>

            <h1>Satu Langkah Menuju Selamat di Tengah Hutan.</h1>

            <p>
                Akses panduan lengkap bertahan hidup di alam liar,
                mulai dari mencari air, membuat api, membangun shelter,
                hingga navigasi darurat.
            </p>
        </div>

        <div class="bottom">

            <div class="card">
                <h3>🛡️ Sesi Terproteksi</h3>
                <p>Menggunakan sistem keamanan Laravel.</p>
            </div>

            <div class="card">
                <h3>🌲 Survival Materi</h3>
                <p>Materi air, api, shelter dan navigasi.</p>
            </div>

        </div>

    </div>

    <div class="login-box">

        <h2>Selamat Datang</h2>
        <p>Silakan masuk ke akun Anda.</p>

        <form action="/login" method="POST">
            @csrf

            <label>Email</label>
            <input type="email" name="email" placeholder="nama@email.com">

            <label>Password</label>
            <input type="password" name="password" placeholder="****">

            <button type="submit">Masuk Aplikasi</button>
        </form>

        <div class="register">
            Belum memiliki akun?
            <a href="#">Daftar sekarang</a>
        </div>

    </div>

</div>
>>>>>>> 62da72ee0c6a29ac7cc74e6015e6ee8b065bcbdd

</body>
</html>