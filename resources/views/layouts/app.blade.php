
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RasaNusa')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <a href="{{ route('home') }}" class="logo">Rasa<span>Nusa.</span></a>

        <nav>
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('kuliner.index') }}">Katalog Kuliner</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <p>RasaNusa &copy; {{ date('Y') }} — Mengenal cita rasa Nusantara.</p>
    </footer>
</body>
</html>
