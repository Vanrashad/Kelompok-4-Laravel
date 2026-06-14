<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Membuat Api</title>

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
    min-height:100vh;
}

.header{
    padding:30px;
    font-size:42px;
    font-weight:bold;
}

.bento{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
    padding:20px;
}

.card{
    background:#0f2b7a;
    border-radius:25px;
    padding:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.25);
}

.hero{
    background:linear-gradient(135deg,#00a8ff,#6dd5fa);
    color:white;
}

.hero h1{
    font-size:48px;
    margin:15px 0;
}

.hero p{
    font-size:18px;
    line-height:1.7;
}

.hero img{
    width:100%;
    margin-top:20px;
    border-radius:20px;
}

.login-box{
    background:#08246f;
}

.login-box h2{
    margin-bottom:10px;
}

.input{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    margin-top:10px;
    background:#061a56;
    color:white;
}

.btn{
    width:100%;
    margin-top:15px;
    padding:15px;
    border:none;
    border-radius:12px;
    background:#00a8ff;
    color:white;
    font-weight:bold;
    cursor:pointer;
}

.bottom{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
    margin-top:20px;
}

.small{
    background:#0f2b7a;
    border-radius:20px;
    padding:20px;
}

a{
    color:white;
    text-decoration:none;
}

@media(max-width:768px){
    .bento{
        grid-template-columns:1fr;
    }

    .bottom{
        grid-template-columns:1fr;
    }
}
</style>

</head>
<body>

<div class="header">
🔥 Membuat Api
</div>

<div class="bento">

<div>

<div class="card hero">
    <span>TEKNIK SURVIVAL</span>

    <h1>Membuat Api Lebih Mudah.</h1>

    <p>
        Api digunakan untuk memasak, menghangatkan tubuh,
        mengusir hewan liar dan memberi sinyal darurat.
    </p>

    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
</div>

<div class="bottom">

<div class="small">
    <h3>🪵 Siapkan Bahan</h3>
    <p>
        Gunakan ranting kering,
        daun kering dan kayu kecil.
    </p>
</div>

<div class="small">
    <h3>🔥 Nyalakan Api</h3>
    <p>
        Gunakan korek api atau
        gesekan kayu kering.
    </p>
</div>

<div class="small">
    <h4>🔥 Materi Membuat Api</h3>
    <p>
    Pelajari cara membuat api untuk memasak,
    menghangatkan tubuh, dan memberi sinyal darurat.
    </p>

<ul>
    <li>🔥 Pilih lokasi aman</li>
    <li>🪵 Kumpulkan kayu kering</li>
    <li>⚡ Gunakan korek atau batu api</li>
    <li>🚫 Jauhkan dari bahan mudah terbakar</li>
</ul>
</div>

<div class="card login-box">

<a href="/dashboard">
⬅️ Kembali ke Dashboard
</a>

</div>


</body>
</html>