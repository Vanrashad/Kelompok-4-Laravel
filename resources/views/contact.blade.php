<!DOCTYPE html>
<html>
<head>
    <title>Contact Person</title>

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
            padding:30px;
        }

        .header{
            font-size:40px;
            font-weight:bold;
            margin-bottom:30px;
        }

        .bento-grid{
            display:grid;
            grid-template-columns:2fr 1fr 1fr;
            gap:20px;
        }

        .card{
            background:#0f2b75;
            border-radius:25px;
            padding:25px;
            text-decoration:none;
            color:white;
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .hero{
            grid-column:1;
            grid-row:1 / span 2;
            background:linear-gradient(135deg,#3b82f6,#60a5fa);
        }

        .hero h1{
            font-size:45px;
            margin-bottom:20px;
        }

        .hero p{
            font-size:18px;
            line-height:1.6;
        }

        .person{
            min-height:220px;
        }

        .person h2{
            margin-bottom:15px;
        }

        .person p{
            margin:8px 0;
            color:#dbeafe;
        }

        .back{
            margin-top:20px;
            display:inline-block;
            background:#3b82f6;
            padding:12px 20px;
            border-radius:12px;
            text-decoration:none;
            color:white;
        }

        @media(max-width:768px){
            .bento-grid{
                grid-template-columns:1fr;
            }

            .hero{
                grid-column:auto;
                grid-row:auto;
            }
        }
    </style>
</head>
<body>

<div class="header">
📞 Contact Person 
</div>

<div class="bento-grid">

    <div class="card hero">
        <h1>Tim Survival Guide</h1>
        <p>
            Hubungi anggota kelompok apabila terdapat pertanyaan
            mengenai aplikasi Survival Guide berbasis Laravel.
        </p>
    </div>

    <div class="card person">
        <h2>👤</h2>
        <p> Alvan Rashad Pratama Kurnia</p>
        <p> 08971575612</p>

        <p>
            <b>IG:</b>
             <a href="https://instagram.com/alvanrashad"
                target="_blank"
                style="color:#60a5fa; text-decoration:none;">
            @alvanrashad
             </a>
        </p>

    </div>

    <div class="card person">
        <h2>👤</h2>
        <p> Risa Aulia Septiani</p>
        <p> 083113276776</p>

        <p>
            <b>IG:</b>
             <a href="https://instagram.com/rsa_lia02"
                target="_blank"
                 style="color:#60a5fa; text-decoration:none;">
             @rsa_lia02
            </a>
        </p>

    </div>

    <div class="card person">
        <h2>👤</h2>
        <p> Jaissy Fauzan Purnama</p>
        <p> 089515635152</p>

        <p>
            <b>IG:</b>
             <a href="https://instagram.com/thelilywhites49"
                target="_blank"
                style="color:#60a5fa; text-decoration:none;">
              @thelilywhites49
            </a>
        </p>

    </div>

</div>

<a href="/" class="back">⬅️ Kembali ke Dashboard</a>

</body>
</html>