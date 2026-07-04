<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
=======
<!DOCTYPE html>
<html>
<head>
    <title>Survival Guide</title>

    <style>
    body{
        margin:0;
        font-family:'Segoe UI',sans-serif;
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
        grid-template-columns:2fr 1fr 1fr 1fr;
        gap:20px;
        padding:20px;
    }

    .login-card,
    .contact-card{
        height: 180px;
    }

    .login-card {
        grid-column: 3;
        grid-row: 1;
        height: 150px;
    }

    .contact-card {
        grid-column: 3;
        grid-row: 2;
        height: 150px;
    }

    .card{
        background:#0f2b7a;
        border-radius:25px;
        padding:25px;
        color:white;
        text-decoration:none;
        transition:.3s;
        overflow:hidden;
        box-shadow:0 10px 25px rgba(0,0,0,.2);
    }

    .card:hover{
        transform:translateY(-5px);
    }

    .hero{
        grid-column:span 2;
        grid-row:span 2;
        background:linear-gradient(135deg,#00a8ff,#6dd5fa);
    }

    .hero h1{
        font-size:42px;
        margin-bottom:10px;
    }

    .hero p{
        font-size:18px;
    }

    .hero img{
        width:100%;
        margin-top:20px;
        border-radius:20px;
    }

    .small{
        min-height:180px;
    }

    .small h2{
        margin-top:10px;
        margin-bottom:10px;
    }

    .icon{
        font-size:35px;
    }

    @media(max-width:768px){
        .bento-grid{
            grid-template-columns:1fr;
        }

        .hero{
            grid-column:span 1;
            grid-row:span 1;
        }
    }
    </style>

</head>
<body>

<div class="header">
    🌲 Survival Guide
</div>

<div class="bento-grid">

    <a href="/materi" class="card hero">
        <span>PLATFORM V1.0</span>

        <h1>Materi Survival Hutan</h1>

        <p>
            Pelajari teknik bertahan hidup di alam liar,
            mulai dari mencari air, membuat api,
            membangun shelter dan menggunakan peralatan.
        </p>

        <img src="https://images.unsplash.com/photo-1448375240586-882707db888b">
    </a>

    <a href="/login" class="card login-card">
        <h2>Login</h2>
        <p>Masuk ke sistem.</p>
    </a>

    <a href="/contact" class="card contact-card">
        <h2>Contact Persone</h2>
        <p>Hubungi anggota kelompok.</p>
    </a>

    <a href="/air" class="card small">
        <div class="icon">💧</div>
        <h2>Mencari Air</h2>
        <p>Menemukan sumber air bersih.</p>
    </a>

    <a href="/api" class="card small">
        <div class="icon">🔥</div>
        <h2>Membuat Api</h2>
        <p>Teknik membuat api darurat.</p>
    </a>

    <a href="/shelter" class="card small">
        <div class="icon">🏕️</div>
        <h2>Shelter</h2>
        <p>Membangun tempat berlindung.</p>
    </a>

    <a href="/peralatan" class="card small">
        <div class="icon">🧰</div>
        <h2>Peralatan</h2>
        <p>Daftar alat survival penting.</p>
    </a>

    <a href="/profil" class="card small">
        <div class="icon">👥</div>
        <h2>Profil Kelompok</h2>
        <p>Data anggota kelompok.</p>
    </a>

<<<<<<< HEAD
<a href="/peralatan" style="text-decoration:none; color:black;">
    <div class="card">
        <h2>🎒 Peralatan</h2>
        <p>Daftar perlengkapan survival.</p>
    </div>
</a>
>>>>>>> 27a555493bdc446d9e8e6767281aaf8917600bf1
=======
</div>

</body>
</html>
>>>>>>> 62da72ee0c6a29ac7cc74e6015e6ee8b065bcbdd
