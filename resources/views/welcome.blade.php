<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Survival Guide Login</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#0f172a;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.container{
    width:1100px;
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
}

.bento-left{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

.card{
    background:#1e293b;
    border-radius:25px;
    padding:25px;
    color:white;
    box-shadow:0 5px 15px rgba(0,0,0,.3);
}

.hero{
    grid-column:1/3;
    background:linear-gradient(135deg,#166534,#22c55e);
}

.hero h1{
    font-size:40px;
    margin-bottom:15px;
}

.hero p{
    line-height:1.7;
}

.card h2{
    margin-bottom:15px;
}

.login-panel{
    background:white;
    border-radius:25px;
    padding:30px;
}

.login-panel h2{
    text-align:center;
    margin-bottom:20px;
    color:#166534;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:12px;
    border:1px solid #ccc;
    border-radius:10px;
}

button{
    width:100%;
    padding:12px;
    background:#16a34a;
    color:white;
    border:none;
    border-radius:10px;
    cursor:pointer;
    font-weight:bold;
}

button:hover{
    background:#15803d;
}

.links{
    text-align:center;
    margin-top:15px;
}

.links a{
    color:#16a34a;
    text-decoration:none;
    display:block;
    margin-top:8px;
}

.form{
    display:none;
}

.form.active{
    display:block;
}
</style>
</head>

<body>

<div class="container">

<div class="bento-left">

<div class="card hero">
<h1>🌲 Cara Bertahan Hidup di Hutan</h1>
<p>
Belajar teknik survival dasar untuk menghadapi kondisi darurat di alam liar.
Temukan cara mencari air, membuat api, membangun tempat berlindung,
serta memberi sinyal pertolongan agar tetap aman saat berada di hutan.
</p>
</div>

<div class="card">
<h2>💧 Mencari Air</h2>
<p>
Prioritaskan menemukan sumber air bersih seperti sungai,
mata air, atau menampung air hujan.
</p>
</div>

<div class="card">
<h2>🔥 Membuat Api</h2>
<p>
Api berguna untuk menghangatkan tubuh,
memasak makanan, dan mengusir hewan liar.
</p>
</div>

<div class="card">
<h2>🏕️ Tempat Berlindung</h2>
<p>
Gunakan ranting, daun besar, dan kayu
untuk membuat shelter sederhana.
</p>
</div>

<div class="card">
<h2>🧭 Menentukan Arah</h2>
<p>
Gunakan kompas, posisi matahari,
atau aliran sungai untuk menemukan jalan keluar.
</p>
</div>

</div>

<div class="login-panel">

<!-- LOGIN -->
<div id="login" class="form active">
<h2>Login</h2>

<input type="email" placeholder="Email">
<input type="password" placeholder="Password">

<button>Masuk</button>

<div class="links">
<a href="#" onclick="showForm('forgot')">Forgot Password?</a>
<a href="#" onclick="showForm('signup')">Belum punya akun? Sign Up</a>
</div>
</div>

<!-- SIGNUP -->
<div id="signup" class="form">
<h2>Sign Up</h2>

<input type="text" placeholder="Nama Lengkap">
<input type="email" placeholder="Email">
<input type="password" placeholder="Password">
<input type="password" placeholder="Konfirmasi Password">

<button>Daftar</button>

<div class="links">
<a href="#" onclick="showForm('login')">Kembali ke Login</a>
</div>
</div>

<!-- FORGOT -->
<div id="forgot" class="form">
<h2>Forgot Password</h2>

<input type="email" placeholder="Masukkan Email">

<button>Kirim Link Reset</button>

<div class="links">
<a href="#" onclick="showForm('login')">Kembali ke Login</a>
</div>
</div>

</div>

</div>

<script>
function showForm(id){
    document.querySelectorAll('.form').forEach(form=>{
        form.classList.remove('active');
    });

    document.getElementById(id).classList.add('active');
}
</script>

</body>
</html>
