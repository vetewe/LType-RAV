<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/gmbr/LOGO.jpg" rel="shorcut icon">
    <title>LType RAV® | Tipe Belajarmu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #ffffff, #ffc0cb);
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 1em;
        }

        h2 {
            font-size: 1.5em;
            margin-bottom: 0.5em;
        }

        p {
            font-size: 1em;
            line-height: 1.5;
            margin-bottom: 1em;
        }

        .vak {
            font-size: 3em;
            color: #800080;
            margin-bottom: 2em;
            font-family: Poppins, sans-serif;
            font-weight: 800; 
        }

        .astronaut {
            width: 500px;
            height: auto;
            margin-top: -50px;
        }

        .button {
            background-color: #800080;
            color: white;
            padding: 1em 2em;
            border: none;
            border-radius: 20px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 1em;
            margin-bottom: 2em; /* Add margin-bottom to create space below the button */
        }

        .button:hover {
            background-color: #660066;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo h1 {
            font-size: 30px;
            font-weight: bold;
            color: #333;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 40px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            flex: 1; /* Membuat container mengisi tinggi yang tersisa */
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <h1>LType</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="/tes0">Tes Tipe Belajar</a></li>
                    <li><a href="tipe">Tipe Belajar</a></li>
                    <li><a href="hubungi">Hubungi</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <h2>Tipe Belajar Anda Adalah :</h2>
            <h2>Sang Penghubung</h2>
            <div class="vak">VKA</div>
            <img src="assets/gmbr/ICON_PR_PNG.png" alt="Astronaut" class="astronaut">
            <p>Seorang mitra hebat yang bekerja dengan baik dengan orang lain. Ingin menciptakan jejaring diantara orang-orang dan membuat hubungan-hubungan.</p>
            <a href="/profil2"><button class="button">Lihat Profil Anda</button></a>
        </div>
    </div>
</body>
</html>
