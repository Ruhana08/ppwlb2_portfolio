<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Home</h1>

    <h3>Navigasi Menu (Menggunakan Named Route):</h3>
    <ul>
        <!-- Link ke route bernama 'home' -->
        <li><a href="{{ route('home') }}">Home</a></li>
        
        <!-- Link ke route bernama 'about' -->
        <li><a href="{{ route('about') }}">About</a></li>
        
        <!-- Link ke route bernama 'halo' dengan parameter 'Emcha' -->
        <li><a href="{{ route('halo', ['nama' => 'Hana']) }}">Halo Bro</a></li>
    </ul>
</body>
</html>