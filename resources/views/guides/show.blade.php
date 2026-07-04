<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $guide->judul }}</title>
    <style>
        body { background-color: #254b9d; color: white; font-family: sans-serif; padding: 40px; }
        .bento-card { background-color: #3d73dd; padding: 40px; border-radius: 20px; max-width: 700px; margin: auto; }
        h1 { margin-top: 0; }
        .konten { line-height: 1.8; white-space: pre-line; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 30px; color: white; text-decoration: none; background: #254b9d; padding: 10px 20px; border-radius: 10px; }
    </style>
</head>
<body>
    <div class="bento-card">
        <h1>{{ $guide->judul }}</h1>
        <div class="konten">{{ $guide->konten }}</div>
        <a href="/dashboard" class="back-btn">← Kembali ke Dashboard</a>
    </div>
    <div style="margin-top: 20px;">
    <a href="{{ route('guides.edit', $guide->id) }}" style="background: orange; padding: 10px; color: white; border-radius: 5px; text-decoration: none;">Edit</a>

    <form action="{{ route('guides.destroy', $guide->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" style="background: red; padding: 10px; color: white; border:none; border-radius: 5px; cursor: pointer;">Hapus</button>
    </form>
</div>
</body>
</html>