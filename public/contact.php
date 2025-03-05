<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch | Gravia Home Support & Inquiries</title>

    <!-- Google Fonts -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lora:wght@300;400;500&family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Animations & Swiper -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- SweetAlert2 CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../Index.php">Gravia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./explore.php">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="./blog.php">Blog's</a></li>
                    <li class="nav-item"><a class="nav-link" href="./About.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <section class="contact-section-new">
        <div class="container-new">
            <div class="contact-content-new">
                <!-- Left Side: Contact Form -->
                <div class="contact-form-new">
                    <h2>Get in touch</h2>
                    <p>We're here to help. Chat with our friendly team 24/7.</p>
    
                    <div class="contact-links-new">
                        <a href="#"><i class="fas fa-comments"></i> Start a live chat</a>
                        <a href="#"><i class="fas fa-envelope"></i> Shoot us an email</a>
                        <a href="#"><i class="fab fa-twitter"></i> Message us on Twitter</a>
                    </div>
    
                    <form>
                        <div class="form-group-new">
                            <input type="text" placeholder="First name" required>
                            <input type="text" placeholder="Last name" required>
                        </div>
    
                        <input type="email" placeholder="Your Email Address" required>
                        <input type="tel" placeholder="Phone number" required>
    
                        <div class="checkbox-group-new">
                            <label class="checkbox-item-new">
                                <input type="checkbox"> Wall Cladding & Panels
                            </label>
                            <label class="checkbox-item-new">
                                <input type="checkbox"> Custom Marble Design
                            </label>
                            <label class="checkbox-item-new">
                                <input type="checkbox"> Kitchen Countertops
                            </label>
                            <label class="checkbox-item-new">
                                <input type="checkbox"> Custom Engraving & Inlays
                            </label>
                            <label class="checkbox-item-new">
                                <input type="checkbox"> Installation & Maintenance
                            </label>
                            <label class="checkbox-item-new">
                                <input type="checkbox"> Other
                            </label>
                        </div>
    
                        <button type="submit" class="contact-btn-new">Send message</button>
                    </form>
                </div>
    
                <!-- Right Side: Map -->
                <div class="contact-map-new">
                    <iframe
                        src="https://maps.google.com/maps?q=Silvassa&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    
    

      <!-- Footer -->
      <footer class="custom-footer">
    <div class="container">
        <div class="row">
            <!-- Branding and Social Links -->
            <div class="col-md-3 footer-brand">
                <a class="navbar-brand fw-bold" href="../Index.php">Gravia</a>
                <div class="social-links mt-2">
                    <a href="#" class="footer-link me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer-link me-3"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="footer-link me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="footer-link"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="col-md-4 footer-column">
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="../Index.php" class="footer-link">Home</a></li>
                            <li><a href="./explore.php" class="footer-link">Products</a></li>
                            <li><a href="../index.php#Project-section" class="footer-link">Projects</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="./about.php" class="footer-link">About Us</a></li>
                            <li><a href="./contact.php" class="footer-link">Contact</a></li>
                            <li><a href="" class="footer-link">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Newsletter Subscription -->
            <div class="col-md-5 col-12 newsletter">
                <form>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control newsletter-input" placeholder="Your email address">
                        <button class="btn newsletter-btn" type="submit">Subscribe</button>
                    </div>
                    <div class="newsletter-note text-center text-md-start">
                        By subscribing to our newsletter you agree to our <a href="#">Privacy Policy</a>.
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</body>
</html>
