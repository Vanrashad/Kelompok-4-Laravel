<!DOCTYPE html>
<html>
<head>
<title>Membangun Shelter</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Segoe UI',sans-serif;
    background:#081b4b;
    color:white;
}

.header{
    padding:35px 40px;
    font-size:40px;
    font-weight:bold;
}

.bento-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
    padding:20px 40px 40px;
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
    background:linear-gradient(135deg,#7b2ff7,#c86dd7);
}

.hero h2{
    font-size:36px;
    margin-bottom:10px;
}

.hero p{
    font-size:18px;
    opacity:.9;
    margin-bottom:20px;
}

.hero img{
    width:100%;
    border-radius:20px;
}

.side-card{
    background:#102f87;
    min-height:250px;
}

.side-card h3{
    font-size:28px;
    margin-bottom:15px;
}

.side-card p{
    font-size:17px;
    opacity:.9;
}

.back-btn{
    display:inline-block;
    margin-top:30px;
    background:#00a8ff;
    color:white;
    padding:12px 25px;
    border-radius:12px;
    text-decoration:none;
    font-weight:bold;
}

.back-btn:hover{
    background:#0097e6;
}
</style>

</head>
<body>

<div class="header">
🏕️ Membangun Shelter
</div>

<div class="bento-grid">

<div class="card hero">
    <h2>Shelter Survival</h2>

    <p>
        Tempat berlindung untuk melindungi diri dari hujan,
        angin, dan cuaca ekstrem saat berada di hutan.
    </p>

    <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=1200"
         alt="Shelter">

    <a href="/dashboard" class="back-btn">
        ← Kembali ke Dashboard
    </a>
</div>

<div class="card side-card">
    <h3>🌿 Gunakan Material Alam</h3>

    <p>
        Manfaatkan ranting, daun, bambu,
        dan kayu yang tersedia di sekitar lokasi.
    </p>

    <br><br>

    <h3>🛠️ Langkah Cepat</h3>

    <p>
        1. Cari lokasi aman<br>
        2. Buat rangka utama<br>
        3. Tutup dengan daun<br>
        4. Pastikan tahan hujan
    </p>
</div>

</div>

</body>
</html>
