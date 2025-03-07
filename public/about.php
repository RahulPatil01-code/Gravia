<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Gravia Story | Crafting Excellence in Stone & Design</title>

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
    <link rel="stylesheet" href="../css/About.css">
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

   <!-- Hero Section -->
   <section class="hero">
        <div class="hero-overlay"></div> <!-- Dark overlay for better text visibility -->
        <div class="hero-content">
            <h1 id="hero-title" data-aos="fade-up" class="display-3 fw-bold">About Us</h1>
            <p id="hero-text" data-aos="fade-up" data-aos-delay="200" class="fs-4">
                Luxurious Marble Designs brings you premium-quality natural stone, crafted for elegance and durability.
            </p>
        </div>
    </section>

    <section class="transportation-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Content -->
                <div class="col-lg-6 col-md-12">
                    <h2>Providing<span> full range</span> of transportation</h2>            
                    <p>We specialize in the safe and efficient transportation of high-quality marble, ensuring it reaches its destination without damage. With years of experience in handling delicate and heavy stone materials, we guarantee precision and reliability.</p>
                    <p>From quarry to construction sites, showrooms, and export markets, our logistics solutions are designed to handle marble slabs, tiles, and blocks with expert care. Our advanced fleet and trained professionals make sure your marble arrives in pristine condition.</p>
                    
                    <div class="btn-container">
                        <a href="#" class="btn btn-primary" onclick="openDiscoverModal(event)">Discover More</a>
                        <div class="contact-info">
                            <img src="../src/call.png" alt="Call">
                            <span>Call Anytime<br><strong>080 7007 8080</strong></span>
                        </div>
                    </div>
                </div>

                <!-- Discover More Modal -->
                <div id="discoverMoreModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeDiscoverModal()">&times;</span>
                        <h2>All India Marble Shipment Available!</h2>
                        <p>We specialize in delivering premium marble across India with secure and timely transportation.</p>
                        
                        <li>✅ Safe & Secure Delivery</li>
                        <li>✅ Fast & Reliable Service</li>
                        <li>✅ Custom Packaging for Maximum Protection</li>
                    
                        <p><strong>Call us for more details: <br> 080 7007 8080</strong></p>
                    </div>
                </div>

                <!-- Right Side Images -->
                <div class="col-lg-6 col-md-12">
                    <div class="image-container">
                        <img src="../src/lr.jpg" class="main-image" alt="Ship">
                        <div class="small-image-box">
                            <img src="../src/sm.jpg" class="small-image" alt="Experience">
                            <div class="experience-box">20+ <br> Years Of Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-container">
        <div class="about-wrapper">
            <div class="about-images">
                <!-- Large Image -->
                <img src="../src/port.jpg" class="about-main-img" alt="Service Image">
                
                <!-- Small Image with Text Box -->
                <div class="about-small-img-box">
                    <img src="../src/smm.jpg" class="about-small-img" alt="Experience">
                    <!-- <div class="about-experience-tag">20+ <br> Years Of Experience</div> -->
                </div>
            </div>

            <!-- Learn More Modal -->
            <div id="learnMoreModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeLearnModal()">&times;</span>
                    <h2>Reliable & Efficient Marble Transportation</h2>
                    <p>Our expert logistics team ensures your marble reaches its destination safely and on time.</p>
                    <ul>
                        <li>✅ Professional Handling & Packaging</li>
                        <li>✅ Specialized Marble Transport Vehicles</li>
                        <li>✅ Nationwide Delivery with On-Time Guarantee</li>
                    </ul>
                    <p><strong>Contact us for customized transport solutions: <br> 080 7007 8080</strong></p>
                </div>
            </div>

            <div class="about-text">
                <div class="about-text-inner">
                    <h5>ABOUT OUR SERVICE</h5>
                    <h2><span>Reliable & Efficient</span> Marble Transportation</h2>
                    <p>We specialize in the safe and efficient transportation of premium marble. 
                    With years of experience, we ensure your materials arrive in pristine condition, 
                    maintaining their high quality and integrity.</p>
                    <p>Our professional logistics team handles every shipment with care, 
                    using advanced packaging and transportation techniques to prevent damage. 
                    Trust us to deliver excellence in every load.</p>

                    <a href="#" class="btn btn-primary" onclick="openLearnModal(event)">Learn more →</a>

                    <div class="about-features">
                        <div class="about-feature-item">
                            <img src="../src/on-time.png" alt="Timely">
                            <span>On-Time Delivery</span>
                        </div>
                        <div class="about-feature-item">
                            <img src="../src/24-7.png" alt="Support">
                            <span>24/7 Customer Support</span>
                        </div>
                        <div class="about-feature-item">
                            <img src="../src/hard-hat.png" alt="Quality">
                            <span>Industry-Grade Safety</span>
                        </div>
                    </div>
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
            <p class="text-center mt-3">&copy; 2025 Gravia. All rights reserved.</p>
        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="../js/scripts.js"></script>
<script>
   // Open & Close Discover More Modal
function openDiscoverModal(event) {
    if (event) event.preventDefault();  // Prevents scrolling to the top
    document.getElementById("discoverMoreModal").style.display = "block";
}

function closeDiscoverModal() {
    document.getElementById("discoverMoreModal").style.display = "none";
}

// Open & Close Learn More Modal
function openLearnModal(event) {
    if (event) event.preventDefault();  // Prevents scrolling to the top
    document.getElementById("learnMoreModal").style.display = "block";
}

function closeLearnModal() {
    document.getElementById("learnMoreModal").style.display = "none";
}

// Close modal when clicking outside
window.onclick = function(event) {
    var discoverModal = document.getElementById("discoverMoreModal");
    var learnModal = document.getElementById("learnMoreModal");

    if (event.target === discoverModal) {
        discoverModal.style.display = "none";
    }
    if (event.target === learnModal) {
        learnModal.style.display = "none";
    }
};

</script>

</body>
</html>

