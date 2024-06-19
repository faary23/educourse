<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dicoding:email" content="netania.indria@gmail.com">
    <meta name="dicoding:email" content="faryotaa@gmail.com">
    <title>Educourse</title>
    <!-- Tambahkan link ke Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/about.css">
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

     <!-- Centered Title Below Navbar -->
     <div class="title-section">
        <h1>Tim Digicode</h1>
    </div>

    <!-- New Section with Three Columns -->
    <div class="three-column-section">
        <div class="column">
            <img src="assets/img/octa.png" alt="Image 1">
            <h2>Octavian Damai Putri</h2>
            <p>Politeknik Negeri Banyuwangi<br>
                "Integritas dalam Setiap Langkah"<br>
                <a href="https://linkedin.com/in/octaviadamai">linkedin.com/in/octaviadamai</a>
            </p>            
        </div>
        <div class="column">
            <img src="assets/img/neta.jpg" alt="Image 2">
            <h2>Netania Indria Wihastuti</h2>
            <p>Universitas Gunadarma<br>
                "There is no shortcut to perfection"<br>
                <a href="https://linkedin.com/in/netania-indria-wihastuti-85999b287">linkedin.com/in/netania-indria-wihastuti</a>
            </p>
        </div>
        <div class="column">
            <img src="assets/img/yota.jpeg" alt="Image 3">
            <h2>Faryota Arimaha Rizqi</h2>
            <p>Politeknik Negeri Banyuwangi<br>
                "Berani Bermimpi, Berani Beraksi"<br>
                <a href="https://linkedin.com/in/faryotaa">linkedin.com/in/faryotaa</a>
            </p>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Digicode</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
