<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educourse</title>
    <!-- Tambahkan link ke Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" />
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
        </div>
        <div class="search-container">
            <input type="text" placeholder="search">
            <button type="submit">Search</button>
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

    <div class="hero">
        <a href="#"><img src="{{ asset('assets/img/hero.png') }}" alt="Hero Image"></a>
    </div>

    <div class="card-container">
        <div class="card">
            <a href="#"><img src="{{ asset('assets/img/bimbel.jpg') }}" alt="Card Image"></a>
            <div class="card-content">
                <h2>Online</h2> 
            </div>
        </div>
        <div class="card">
            <a href="#"><img src="{{ asset('assets/img/bimbel.jpg') }}" alt="Card Image"></a>
            <div class="card-content">
                <h2>Offline</h2>   
            </div>
        </div>
        <div class="card">
            <a href="#"><img src="{{ asset('assets/img/bimbel.jpg') }}" alt="Card Image"></a>
            <div class="card-content">
                <h2>Online</h2>             
            </div>
        </div>
        <div class="card">
            <a href="#"><img src="{{ asset('assets/img/bimbel.jpg') }}" alt="Card Image"></a>
            <div class="card-content">
                <h2>Offline</h2>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Educourse</p>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
