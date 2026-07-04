<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Materi Survival Guide</title>
    <style>
        /* Mengatur background biru seperti dashboard */
        body {
            background-color: #254b9d; /* Warna biru dashboard Anda */
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Desain kotak bergaya bento grid */
        .bento-card {
            background-color: #3d73dd; /* Biru yang lebih terang untuk kotak form */
            padding: 40px;
            border-radius: 20px; /* Sudut melengkung */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 24px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 15px;
        }

        /* Desain input teks agar rapi dan membulat */
        input[type="text"], textarea {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 12px;
            box-sizing: border-box;
            font-family: inherit;
            font-size: 14px;
            background-color: #f8fafc;
            color: #1e293b;
        }

        input[type="text"]:focus, textarea:focus {
            outline: 2px solid #60a5fa;
        }

        /* Desain tombol simpan */
        button {
            background-color: white; 
            color: #254b9d;
            border: none;
            padding: 14px 20px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.2s, transform 0.1s;
        }

        button:hover {
            background-color: #f1f5f9;
            transform: scale(0.98);
        }

        /* Link kembali ke dashboard */
        .back-link {
            display: block;
            margin-top: 20px;
            color: #e2e8f0;
            text-decoration: none;
            font-size: 14px;
            text-align: center;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="bento-card">
        <h2>🏕️ Tambah Materi Baru</h2>

        <form action="{{ route('guides.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="judul">Judul Materi:</label>
                <input type="text" name="judul" id="judul" placeholder="Contoh: Cara Membuat Bivak" required>
            </div>
            
            <div class="form-group">
                <label for="konten">Isi Materi:</label>
                <textarea name="konten" id="konten" rows="8" placeholder="Tulis panduan survival selengkapnya di sini..." required></textarea>
            </div>

            <button type="submit">Simpan Materi</button>
        </form>

        <a href="/dashboard" class="back-link">← Kembali ke Dashboard</a>
    </div>

</body>
</html>