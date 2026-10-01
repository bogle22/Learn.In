<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Learn.In Bimbingan Belajar')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header class="navbar">

    <a href="{{ route('home') }}">
    <img src="{{ asset('images/logo.png') }}" alt="EduCenter" class="logo">
</a>

    <nav>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('about') }}">Tentang Kami</a>
        <a href="{{ route('programs') }}">Program</a>
        <a href="{{ route('gallery') }}">Galeri</a>
        <a href="{{ route('team') }}">Tim Kami</a>
        <a href="{{ route('contact') }}">Kontak</a>
    </nav>

   

</header>

<main>
    @yield('content')
</main>

<footer>

    <div>
        <h3>Learn.In</h3>
        <p>
            Pusat bimbingan belajar untuk membantu
            siswa berkembang dan meraih prestasi.
        </p>
    </div>

    <div>
        <h4>Menu</h4>
        <a href="{{ route('about') }}">Tentang Kami</a>
        <a href="{{ route('programs') }}">Program</a>
        <a href="{{ route('gallery') }}">Galeri</a>
    </div>

    <div>
        <h4>Kontak</h4>
        <p>Bogor, Indonesia</p>
        <p>0838-7227-6605</p>
        <p>info@learnin.com</p>
    </div>

</footer>

</body>
</html>