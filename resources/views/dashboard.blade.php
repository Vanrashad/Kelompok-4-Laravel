<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
padding:20px;
}

.grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:15px;
}

.card{
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.big{
grid-column:span 2;
grid-row:span 2;
background:#2ecc71;
color:white;
}

</style>
</head>

<body>

<h1>Survival Guide Dashboard</h1>

<div class="grid">

<div class="card big">
<h2>Materi Survival Hutan</h2>
<p>Pelajari teknik bertahan hidup di alam liar.</p>
<a href="/materi">Lihat Materi</a>
</div>

<div class="card">
<h3>Mencari Air</h3>
</div>

<div class="card">
<h3>Membuat Api</h3>
</div>

<div class="card">
<h3>Membangun Shelter</h3>
</div>

<div class="card">
<h3>Navigasi Alam</h3>
</div>

</div>

</body>
</html>