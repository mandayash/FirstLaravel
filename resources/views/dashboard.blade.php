<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife Harmony</title>
    <link rel="icon" href="{{ asset('aset/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('aset/logo.png') }}" alt="Wildlife Harmony Logo">
            <span>Wildlife Harmony</span>
        </div>
        <div class="nav-links">
            <a href="#hero">HOME</a>
            <a href="#about">ABOUT US</a>
            <a href="#goals">OUR GOALS</a>
            <a href="#services">SERVICES</a>
            <a href="#articles">ARTICLES</a>
            <a href="{{ route('galleries.index') }}">GALLERY</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>Welcome to <br><span>Wildlife Harmony.</span></h1>
            <p>Exploring the lives of wild animals and the importance of protecting
               their habitats. We shine a light on conservation efforts to ensure a
               thriving future for all species.</p>
            <a href="#services" class="explore-btn">Explore More</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us" id="about">
        <div class="about-content">
            <h2>About <span>Us</span></h2>
            <p>
                Wildlife Harmony is dedicated to protecting and preserving wildlife across the
                globe. We believe that every living creature plays a crucial role in maintaining the
                balance of our ecosystem. Through education, research, and collaborative
                efforts, we aim to raise awareness about the importance of conservation and
                help safeguard natural habitats for future generations. Join us on this journey to
                build a world where wildlife and humanity can coexist in harmony!
            </p>
            <div class="about-logo">
                <img src="{{ asset('aset/logo.png') }}" alt="Wildlife Harmony Logo">
                <div class="logo-text">
                    <span class="wildlife">Wildlife</span>
                    <span class="harmony">Harmony</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Goals Section -->
    <section class="our-goals" id="goals">
        <h2>Our <span>Goals</span></h2>

        <ul class="goals-list">
            <li class="goal-item">
                <img src="{{ asset('aset/promote.png') }}" alt="Conservation Icon" class="goal-icon">
                <div class="goal-content">
                    <h3>Promote Wildlife Conservation</h3>
                    <p>– Advocate for the protection of endangered species and their habitats.</p>
                </div>
            </li>

            <li class="goal-item">
                <img src="{{ asset('aset/raise.png') }}" alt="Awareness Icon" class="goal-icon">
                <div class="goal-content">
                    <h3>Raise Environmental Awareness</h3>
                    <p>– Educate communities on the importance of preserving biodiversity and natural ecosystems.</p>
                </div>
            </li>

            <li class="goal-item">
                <img src="{{ asset('aset/sustainable.png') }}" alt="Habitat Icon" class="goal-icon">
                <div class="goal-content">
                    <h3>Support Sustainable Habitats</h3>
                    <p>– Collaborate with partners to restore and maintain natural habitats for wildlife.</p>
                </div>
            </li>

            <li class="goal-item">
                <img src="{{ asset('aset/encourage.png') }}" alt="Coexistence Icon" class="goal-icon">
                <div class="goal-content">
                    <h3>Encourage Ethical Coexistence</h3>
                    <p>– Foster understanding on how humans and wildlife can coexist sustainably.</p>
                </div>
            </li>

            <li class="goal-item">
                <img src="{{ asset('aset/future.png') }}" alt="Future Icon" class="goal-icon">
                <div class="goal-content">
                    <h3>Inspire Future Conservationists</h3>
                    <p>– Empower the next generation to take action for wildlife and environmental conservation.</p>
                </div>
            </li>
        </ul>
    </section>


    <!-- Services Section -->
    <section class="services-section" id="services">
        <h2 class="services-title">Our <span>Services</span></h2>

        <div class="services-container">
            <table class="services-table">
                <tr>
                    <td class="service-cell">
                        <div class="service-card">
                            <img src="{{ asset('aset/adopt.png') }}" alt="Adopt a Wildlife">
                            <h3>Adopt a Wildlife</h3>
                            <p>Support endangered species by adopting an animal through our program. Your contributions help fund their care, rehabilitation, and protection efforts in wildlife sanctuaries.</p>
                        </div>
                    </td>
                    <td class="service-cell">
                        <div class="service-card">
                            <img src="{{ asset('aset/conservation.png') }}" alt="Wildlife Conservation">
                            <h3>Wildlife Conservation</h3>
                            <p>Join our conservation initiatives to protect natural habitats and ensure the survival of vulnerable species. We focus on preserving ecosystems and combating poaching through proactive strategies.</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="service-cell">
                        <div class="service-card">
                            <img src="{{ asset('aset/researchedu.png') }}" alt="Research and Education">
                            <h3>Research and Education</h3>
                            <p>Engage in vital research and educational programs that help us better understand wildlife behavior, threats to their survival, and the importance of conservation efforts worldwide.</p>
                        </div>
                    </td>
                    <td class="service-cell">
                        <div class="service-card">
                            <img src="{{ asset('aset/fund.png') }}" alt="Fund and Donate">
                            <h3>Fund and Donate</h3>
                            <p>Your donations are crucial for supporting wildlife preservation projects, research, and emergency rescue operations. Help us make a difference by contributing to our mission of safeguarding wildlife.</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    <!-- Article Section -->
    <section class="articles-section" id="articles">
        <h2 class="articles-title">Articles</h2>

        <!-- Harimau Sumatra Article -->
        <article class="wildlife-article">
            <h3 class="animal-title">Harimau Sumatra</h3>
            <div class="article-image">
                <img src="{{ asset('aset/harimau.png') }}" alt="Harimau Sumatra" class="featured-image">
            </div>

            <div class="article-content">
                <section class="content-section">
                    <h4>About Harimau Sumatra</h4>
                    <p>Adult male tigers can reach a height of up to 60 cm at the shoulder, with a head-to-tail length of up to 250 cm and a weight of up to 140 kg. Female tigers, on average, are 198 cm long and weigh up to 91 kg. The skin color of this species is relatively darker with closely spaced stripes.</p>
                </section>

                <section class="content-section">
                    <h4>Threats</h4>
                    <p class="highlight-text">The main threats to this species include poaching, illegal trade, habitat loss, and the decline of prey species. Tigers are hunted for various body parts, including their skin, whiskers, claws, fangs, and meat. Some communities use tiger parts as talismans, believing they possess magical powers.</p>
                </section>

                <section class="content-section">
                    <h4>What We Do?</h4>
                    <p>We have established a tiger monitoring unit and successfully gathered the first ecological evidence of tigers. To this day, we continue to work on the ground to monitor tigers in three key habitats of the Sumatran tiger (Rimbang Baling-Betabuh, Batanghari, and Bukit Tigapuluh). We also monitor the illegal tiger trade both online and offline.</p>
                </section>
            </div>
        </article>

        <!-- Sea Turtles Article -->
        <article class="wildlife-article">
            <h3 class="animal-title">Sea Turtles</h3>
            <div class="article-image">
                <img src="{{ asset('aset/turtles.png') }}" alt="Sea Turtle" class="featured-image">
            </div>

            <div class="article-content">
                <section class="content-section">
                    <h4>About Sea Turtles</h4>
                    <p>Sea turtles are protected species under Law Number 5 of 1990 on the Conservation of Natural Resources and Ecosystems. Unfortunately, many people still hunt sea turtle eggs for sale or consumption.</p>
                </section>

                <section class="content-section">
                    <h4>Threats</h4>
                    <p>Various threats jeopardize the existence of sea turtles in Indonesia, including egg collection, poaching of adult turtles for their meat, and accidental deaths caused by entanglement in fishing gear. Ocean pollution also contributes to the deaths of these turtles. Phthalates, chemicals found in plastics, are often detected in sea turtle eggs. Turtles frequently mistake plastic for jellyfish, their favorite food.</p>
                </section>

                <section class="content-section">
                    <h4>What We Do?</h4>
                    <p>WWF-Indonesia is dedicated to protecting sea turtles through conservation programs. Efforts include raising public awareness, monitoring sea turtle migration patterns, supporting the control of illegal wildlife trade, protecting nesting areas, promoting and facilitating the creation of Marine Protected Areas (MPAs) based on sea turtles, addressing accidental turtle captures directly on fishing boats, and signing various memorandums of understanding in commitment to sea turtle protection in Indonesia.</p>
                </section>
            </div>
        </article>
    </section>

    <!-- Sign Up Section -->
    <section class="signup-section">
        <div class="signup-container">
            <h2 class="signup-title">Join Us and <span>Sign Up Now!</span></h2>

            <form id="signupForm" class="signup-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Your name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Your email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Your password"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                        required
                    >
                </div>

                <button type="submit" id="submitBtn">Sign Up</button>
            </form>

            <div id="popup" class="popup-message"></div>
        </div>
    </section>

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
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#goals">Our Goals</a></li>
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="#articles">Articles</a></li>
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
