<!DOCTYPE html>
<html lang="id">
<head>
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
</head>
<body>

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

</body>
</html>