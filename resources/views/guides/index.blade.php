<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Materi Survival Guide</title>
    <style>
        /* Desain dasar yang senada dengan dashboard */
        body {
            background-color: #254b9d; 
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Desain header dan tombol navigasi */
        .header-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .header-nav h2 {
            margin: 0;
        }

        .tombol-nav {
            background-color: white;
            color: #254b9d;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: background-color 0.2s;
            margin-left: 10px;
        }

        .tombol-nav:hover {
            background-color: #e2e8f0;
        }

        /* Desain Bento Grid untuk list materi */
        .bento-card {
            background-color: #3d73dd;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .bento-card h3 {
            margin-top: 0;
            margin-bottom: 15px;
            color: #ffffff;
            font-size: 22px;
            border-bottom: 1px solid #60a5fa;
            padding-bottom: 10px;
        }

        .bento-card p {
            line-height: 1.6;
            white-space: pre-line; /* Agar enter (baris baru) di form terbaca di sini */
        }

        /* Notifikasi sukses */
        .alert-success {
            background-color: #10b981; /* Warna hijau sukses */
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <div class="header-nav">
            <h2>📚 Daftar Materi Survival</h2>
            <div>
                <a href="/dashboard" class="tombol-nav">🏠 Dashboard</a>
                <a href="{{ route('guides.create') }}" class="tombol-nav">➕ Tambah Lagi</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert-success">
                ✅ {{ $message }}
            </div>
        @endif

        @foreach($guides as $row)
            <div class="bento-card">
                <h3>{{ $row->judul }}</h3> <p>{{ $row->isi }}</p>
        
        <a href="{{ route('guides.edit', $row->id) }}">Edit</a>
        <form action="{{ route('guides.destroy', $row->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </div>
@endforeach

        @if(count($guides) == 0)
            <div class="bento-card" style="text-align: center;">
                <p>Belum ada materi. Yuk tambah materi pertamamu!</p>
            </div>
        @endif

    </div>

    <div class="card">
        <h3><?= $row['judul']; ?></h3>
        <p><?= $row['isi']; ?></p>
    
        <a href="edit.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
    </div>

</body>
</html>