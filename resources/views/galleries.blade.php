<!-- filepath: /c:/Users/user/Documents/comp sci/stud/5th/Prak PemWeb/W-10 Laravel/wildlife-harmony/resources/views/gallery.blade.php -->
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
            <a href="{{ route('home') }}">ABOUT US</a>
            <a href="{{ route('home') }}">OUR GOALS</a>
            <a href="{{ route('home') }}">SERVICES</a>
            <a href="{{ route('home') }}">ARTICLES</a>
            <a href="{{ route('galleries.index') }}">GALLERY</a>
        </div>
    </nav>

    <main class="gallery-container">
        <div class="gallery-header">
            <h1>Welcome to <span class="highlight">Our Gallery.</span></h1>
            <p>Explore our journey through the lens of Wildlife Harmony. Our gallery showcases the various conservation efforts, community outreach programs, and milestones we've achieved in protecting wildlife and their habitats.</p>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="{{ asset('aset/1.png') }}" alt="Gray wolves in snow">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('aset/2.png') }}" alt="Caretaker with baby elephant">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('aset/3.png') }}" alt="Caretaker feeding elephant">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('aset/4.png') }}" alt="Elephant sanctuary worker">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('aset/5.png') }}" alt="Elephant care program">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('aset/6.png') }}" alt="Wildlife conservation">
            </div>
        </div>
    </main>

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
