<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educourse</title>
    <!-- Tambahkan link ke Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/about.css">
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

     <!-- Centered Title Below Navbar -->
     <div class="title-section">
        <h1>Tim Digicode</h1>
    </div>

    <!-- New Section with Three Columns -->
    <div class="three-column-section">
        <div class="column">
            <img src="assets/img/cewe.jpg" alt="Image 1">
            <h2>Octavian Damai Putri</h2>
            <p>Politeknik Negeri Banyuwangi<br>
                Maju Tak Gentar<br>
                <a href="https://linkedin.com/in/octaviadamai">linkedin.com/in/octaviadamai</a>
            </p>            
        </div>
        <div class="column">
            <img src="assets/img/cewe.jpg" alt="Image 2">
            <h2>Netania Indria Wihastuti</h2>
            <p>Mana yak lupa :v<br>
                Aing Trobos barudak<br>
                linkedin.com/in/netania</p>
        </div>
        <div class="column">
            <img src="assets/img/laki.jpg" alt="Image 3">
            <h2>Faryota Arimaha Rizqi</h2>
            <p>Politeknik Negeri Banyuwangi<br>
                Oke Boleh<br>
                linkedin.com/in/faryotaari</p>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Educourse</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
