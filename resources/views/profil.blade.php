<!DOCTYPE html>
<html>
<head>
<title>Profil Kelompok</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#081b4b;
    color:white;
}

.header{
    padding:30px;
    font-size:40px;
    font-weight:bold;
}

.bento-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
    padding:20px;
}

.card{
    background:#0f2b7a;
    border-radius:25px;
    padding:25px;
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.hero{
    background:linear-gradient(135deg,#00a8ff,#6dd5fa);
}

.hero h1{
    font-size:45px;
    margin-bottom:10px;
}

.member{
    min-height:180px;
}

.member h2{
    margin-bottom:10px;
}

.member p{
    color:#cbd5e1;
    line-height:1.8;
}

.icon{
    font-size:30px;
    margin-bottom:10px;
}

.btn{
    display:inline-block;
    margin-top:20px;
    background:#00a8ff;
    color:white;
    padding:12px 25px;
    border-radius:12px;
    text-decoration:none;
}
</style>

</head>
<body>

<div class="header">
👥 Profil Kelompok 4
</div>

<div class="bento-grid">

    <div class="card hero">
        <h1>Survival Guide Laravel</h1>
        <p>
            Website edukasi bertahan hidup di hutan menggunakan Laravel dan Bento Grid Design.
        </p>

        <a href="/dashboard" class="btn">
            Kembali ke Dashboard
        </a>
    </div>

    <div class="card member">
        <div class="icon">👨‍💻</div>
        <h2>Alvan Rashad Pratama Kurnia</h2>
        <p>NIM : F1A250016</p>
        <p>Tugas : Login</p>
    </div>

    <div class="card member">
        <div class="icon">👩‍💻</div>
        <h2>Risa Aulia Septiani</h2>
        <p>NIM : F1A250014</p>
        <p>Tugas : Isi</p>
    </div>

    <div class="card member">
        <div class="icon">👨‍💻</div>
        <h2>Jaissy Fauzan Purnama</h2>
        <p>NIM : F1A250011</p>
        <p>Tugas : Contact Person</p>
    </div>

</div>

</body>
</html>