<!-- filepath: /c:/Users/user/Documents/comp sci/stud/5th/Prak PemWeb/W-10 Laravel/wildlife-harmony/resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife Harmony</title>
    <link rel="icon" href="{{ asset('aset/logo.png') }}">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('aset/logo.png') }}" alt="Wildlife Harmony Logo">
            <span>Wildlife Harmony</span>
        </div>
        <div class="nav-links">
            <a href="{{ route('home') }}">HOME</a>
            <a href="{{ route('home') }}#about">ABOUT US</a>
            <a href="{{ route('home') }}#goals">OUR GOALS</a>
            <a href="{{ route('home') }}#services">SERVICES</a>
            <a href="{{ route('home') }}#articles">ARTICLES</a>
            <a href="{{ route('galleries.index') }}">GALLERY</a>
            @auth
                <a href="{{ route('profile.edit') }}">
                    @if(auth()->user()->profile_photo)
                        <img src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="Profile Photo" class="profile-photo">
                    @endif
                    {{ auth()->user()->name }}
                </a>
            @endauth
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: contact@wildlifeharmony.org</p>
                <p>Phone: +1 234 567 890</p>
                <p>Address: 123 Nature Street, Green City, 45678, Country</p>
            </div>

            <div class="footer-section">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="https://www.facebook.com/wildlifeharmony" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/wildlifeharmony" target="_blank">Instagram</a></li>
                    <li><a href="https://www.twitter.com/wildlifeharmony" target="_blank">Twitter</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ route('home') }}#about">About Us</a></li>
                    <li><a href="{{ route('home') }}#goals">Our Goals</a></li>
                    <li><a href="{{ route('home') }}#services">Our Services</a></li>
                    <li><a href="{{ route('home') }}#articles">Articles</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Wildlife Harmony. All Rights Reserved.</p>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
