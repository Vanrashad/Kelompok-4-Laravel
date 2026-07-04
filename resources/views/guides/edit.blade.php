<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Materi Survival Guide</title>
    <style>
        body {
            background-color: #3b82f6; /* Warna biru latar belakang */
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-sizing: border-box; /* Penting agar padding tidak merusak lebar */
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #e5e7eb;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>✏️ Edit Materi Survival Guide</h2> 
<form action="{{ route('guides.update', $guide->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label>Judul Materi:</label>
    <input type="text" name="judul" value="{{ $guide->judul }}">
    
    <label>Isi Materi:</label>
    <textarea name="konten">{{ $guide->konten }}</textarea>
    
    <button type="submit">Simpan Perubahan</button>
</form>

        <a href="/dashboard">← Kembali ke Dashboard</a>
    </div>
</div>

