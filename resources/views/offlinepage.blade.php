<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educourse</title>
     <!-- Tambahkan link ke Google Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('assets/css/offlinepage.css') }}" />
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
        </div>
        <div class="search-container">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Search" value="{{ request()->input('query') }}">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="hamburger" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="nav-links" id="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Kategori</button>
                <div class="dropdown-content">
                    <a href="{{ route('online') }}">Online</a>
                    <a href="{{ route('offline') }}">Offline</a>
                </div>
            </div>
            <a href="{{ route('about') }}">About</a>
        </div>
    </nav>

    <div class="card-container">
        @foreach ($data as $item)
            <div class="card">
                <a href="{{ route('detail', ['id' => $item['id']]) }}"><img src="{{ asset('assets/img/'.$item['img']) }}" alt="Card Image"></a>
                <div class="card-content">
                    <h2>{{ $item['status'] }}</h2>
                </div>
            </div>
        @endforeach
    </div>

    <footer class="footer">
        <p>&copy; 2024 Educourse</p>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
