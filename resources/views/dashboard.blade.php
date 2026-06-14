<!DOCTYPE html>
<html>
<head>
<title>Dashboard Survival Guide</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:#eef5ee;
}

.navbar{
background:#1b5e20;
color:white;
padding:20px;
display:flex;
justify-content:space-between;
}

.menu a{
color:white;
text-decoration:none;
margin-left:20px;
}

.container{
padding:25px;
}

.grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:15px;
}

.card{
background:white;
padding:20px;
border-radius:20px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.hero{
grid-column:span 2;
grid-row:span 2;
background:linear-gradient(135deg,#2e7d32,#66bb6a);
color:white;
}

.hero img{
width:100%;
border-radius:15px;
margin-top:10px;
}

.big{
grid-column:span 2;
}

.card:hover{
transform:translateY(-5px);
transition:.3s;
}

.btn{
display:inline-block;
margin-top:10px;
padding:10px 15px;
background:white;
color:#1b5e20;
text-decoration:none;
border-radius:10px;
font-weight:bold;
}

</style>
</head>

<body>

<div class="navbar">
<h2>🌲 Survival Guide</h2>

<div class="menu">
<a href="/dashboard">Dashboard</a>
<a href="/materi">Materi</a>
<a href="/">Logout</a>
</div>
</div>

<div class="container">

<div class="grid">

<div class="card hero">
<h2>🌳 Materi Survival Hutan</h2>
<p>Pelajari teknik bertahan hidup di alam liar.</p>

<img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e">

<a href="/materi" style="text-decoration:none;color:black;">
    <div class="card">
        <h2>💧 Mencari Air</h2>
        <p>Menemukan sumber air bersih.</p>
    </div>
</a>

<a href="/api" style="text-decoration:none;color:black;">
    <div class="card">
        <h2>🔥 Membuat Api</h2>
        <p>Teknik membuat api darurat.</p>
    </div>
</a>

<a href="/shelter" style="text-decoration:none;color:black;">
    <div class="card">
        <h2>🏕️ Shelter</h2>
        <p>Membangun tempat berlindung sederhana.</p>
    </div>
</a>

<a href="/profil" style="text-decoration:none;color:black;">
    <div class="card">
        <h2>👥 Profil Kelompok</h2>
        <p>Data anggota kelompok.</p>
    </div>
</a>

<a href="/peralatan" style="text-decoration:none; color:black;">
    <div class="card">
        <h2>🎒 Peralatan</h2>
        <p>Daftar perlengkapan survival.</p>
    </div>
</a>