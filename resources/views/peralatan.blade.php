<!DOCTYPE html>
<html>
<head>
<title>Peralatan Survival</title>

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
    color:white;
}

.hero img{
    width:100%;
    border-radius:20px;
    margin-top:20px;
}

.icon{
    font-size:30px;
    margin-bottom:10px;
}

.small{
    min-height:180px;
}

a{
    color:white;
    text-decoration:none;
}
</style>

</head>
<body>

<div class="header">
🎒 Peralatan Survival Hutan
</div>

<div class="bento-grid">

    <div class="card hero">
        <span>PERALATAN UTAMA</span>
        <h1>Peralatan Survival Lengkap</h1>
        <p>
            Peralatan penting yang wajib dibawa saat bertahan hidup di hutan.
        </p>

        <img src="https://images.unsplash.com/photo-1511497584788-876760111969?w=1200"
             alt="Peralatan Survival">
    </div>

    <div class="card small">
        <div class="icon">🔪</div>
        <h2>Pisau Survival</h2>
        <p>Memotong kayu, tali, dan kebutuhan lainnya.</p>
    </div>

    <div class="card small">
        <div class="icon">🔥</div>
        <h2>Korek Api</h2>
        <p>Membantu membuat api saat keadaan darurat.</p>
    </div>

    <div class="card small">
        <div class="icon">💧</div>
        <h2>Botol Air</h2>
        <p>Menyimpan persediaan air bersih.</p>
    </div>

    <div class="card small">
        <div class="icon">🏕️</div>
        <h2>Tenda</h2>
        <p>Tempat berlindung saat bermalam di alam bebas.</p>
    </div>

</div>

</body>
</html>